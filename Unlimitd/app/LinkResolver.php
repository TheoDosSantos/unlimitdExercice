<?php

/* START - Unuse but don't remove that */
class PrismicLinkResolver { public function resolve($link) { return '/'; } }
/* END - Unuse but don't remove that */

use Prismic\Dom\RichText;

/** Function getLang
  *   No Argument
  *   Return actual language of the website
  */
  function getLang() {
    $urlt = explode('/',(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    return $urlt[3];
  }

/** Function getCanonical
  *   No Argument
  *   Return actual URL of the website
  */
  function getCanonical() {
    $urlt = explode('/',(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    return $urlt[0].'//'.$urlt[2].'/'.$urlt[3].'/';
  }

/** Function isLink
  *   One Argument : $id Prismic
  *   Return true if is a link, false if isn't a link
  */
  function isLink($id) {
    if(isset($id->url)) return true;
    else if(isset($id->uid)) return true;
    return false;
  }

/** Function pUrl
  *   One Argument : $id Prismic
  *   Return href with generate link
  */
  function pUrl($id) {
    $url = getCanonical();
    $return = '';
    if( isLink($id) ) {
      if(isset($id->url)) $return = 'href="'.$id->url.'"';
      else {
          if($id->type == "home") $return = 'href="'.$url.'"';
          else $return = 'href="'.$url.$id->uid.'"';
      }
    }
    return $return;
  }

/** Function checkDom
  *   One Argument : $dom html
  *   Return true if $dom is in the list, false if $dom isn't in the list
  */
  function checkDom($dom) {
    if( $dom === 'span' ||
        $dom === 'h1' ||
        $dom === 'h2' ||
        $dom === 'h3' ||
        $dom === 'h4' ||
        $dom === 'h5' ||
        $dom === 'h6' ||
        $dom === 'p' ) return true;
    return false;
  }

function explodeDom($dom) {
  $return = null;
  if(strpos($dom, '.') != false) {
    $domE = explode('.', $dom);
    $return = [
      $domE[0],
      'class="'.$domE[1].'"'
    ];
  } else if(strpos($dom, '#') != false) {
    $domE = explode('#', $dom);
    $return = [
      $domE[0],
      'id="'.$domE[1].'"'
    ];
  } else {
    $return = [
      $dom,
      ''
    ];
  }
  return $return;
}

function pt($id, $dom = null, $r = false) {
  $return = null;
  if($dom === null) {
    $return = RichText::asHtml($id);
  } else {
    $dom = explodeDom($dom);
    $return = '<'.$dom[0].' '.$dom[1].'>'.RichText::asText($id).'</'.$dom[0].'>';
  }
  if($r) return $return;
  else echo($return);
}

function pimg($id, $dom = null, $r = false) {
  $return = null;
  if($dom === null) {
    $return = '<img src="'.$id->url.'" alt="'.$id->alt.'">';
  } else {
    $in = null;
    if($dom[0] === '.') {
      $in = 'class="'.substr($dom, 1).'"';
    } else if($dom[0] === '#') {
      $in = 'id="'.substr($dom, 1).'"';
    }
    $return = '<img '.$in.' src="'.$id->url.'" alt="'.$id->alt.'">';
  }
  if($r) return $return;
  else echo($return);
}

function pa($idL, $idT, $dom = 'a', $nt = false) {
  $return = null;
  $dom = explodeDom($dom);
  if($nt) {
    $nt = 'target="_blank"';
  } else $nt = "";
  $return = '<'.$dom[0].' '.$dom[1].' '.pUrl($idL).' '.$nt.'>'.RichText::asText($idT).'</'.$dom[0].'>';
  echo($return);
}

$indexPF;
function pfLoop($dom, $loop) {
  global $indexPF;
  $return = '';
  $dE = explodeDom($dom);
  if( strlen($dE[0]) > 0 && !is_numeric($dE[0]) ) {
    if( $dE[0] === 'a' ) {
      $return .= '<'.$dE[0].' '.$dE[1].' PFID'.$indexPF.'>';
      $indexPF++;
    } else $return .= '<'.$dE[0].' '.$dE[1].'>';
  }
  if( is_array($loop) ) {
    foreach ($loop as $key => $l) {
      $return .= pfLoop($key, $l);
    }
  } else {
    $lE = explodeDom($loop);
    if(checkDom($loop)) {
      $return .= '<'.$lE[0].' '.$lE[1].'>PFID'.$indexPF.'</'.$lE[0].'>';
      $indexPF++;
    } else {
      if($lE[0] === 'svg') {
        $lE2 = explode(',',$loop);
        $lE = explodeDom($lE2[0]);
        $return .= '<svg '.$lE[1].' xmlns="http://www.w3.org/2000/svg" viewBox="'.str_replace('|',' ',$lE2[1]).'"><use xlink:href="'.$lE2[2].'"></use></svg>';
      } else if($lE[0] === 'img') {
        $return .= '<img '.$lE[1].' src="PFID'.$indexPF.'_1" alt="PFID'.$indexPF.'_2">';
        $indexPF++;
      } else $return .= '<'.$lE[0].' '.$lE[1].'></'.$lE[0].'>';
    }
  }
  if( strlen($dE[0]) > 0 && !is_numeric($dE[0]) ) $return .= '</'.$dE[0].'>';
  return $return;
}

function pf($itemS, $domS, $idS) {
  global $indexPF;
  $indexPF = 0;
  $return = "";
  $domGenerate = pfLoop(null, $domS, 0);
  $idS = explode(':', $idS);
  foreach ($itemS as $item) {
    $return .= $domGenerate;
    $idIndex = 0;
    foreach ($idS as $id) {
      $find = 'PFID'.$idIndex;
      if( isLink($item->$id) ) {
        if( isset($item->$id->dimensions) ) {
          $return = str_replace($find.'_1',$item->$id->url,$return);
          $return = str_replace($find.'_2',$item->$id->alt,$return);
        } else {
          $return = str_replace($find,pUrl($item->$id),$return);
        }
      } else $return = str_replace($find,RichText::asText($item->$id),$return);
      $idIndex++;
    }
    echo('<br>');echo('<br>');echo('<br>');
  }

  //print_r(htmlentities($return));
  echo($return);
}

// A VOIR / FAIRE
// FUNCTION SVG (pSVG) && FUNCTION LINK COMPLEXE (pL)
/**
 * pfi(id,name,type = “text”)
 * pb ( button link )
 */