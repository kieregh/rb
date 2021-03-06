<?php
if(!defined('__KIMS__')) exit;

//***********************************************************************************
// 여기에 이 레이아웃에서 사용할 변수들을 정의합니다. 
// 변수 작성법은 매뉴얼을 참고하세요.
//***********************************************************************************

$d['layout']['show'] = true; // 관리패널에 레이아웃 관리탭을 보여주기
$d['layout']['date'] = false;  // 데이트픽커 사용


//***********************************************************************************
// 설정배열
//***********************************************************************************

$d['layout']['dom'] = array(

	/* 헤더 */
	'header' => array(
		'헤더',
		'',
		array(
			array('title','input','사이트 제목',''),
			array('login','select','로그인폼 출력','예=true,아니오=false'),
			array('notify','select','알림 출력','예=true,아니오=false'),
		),
	),

	/* 프론트 */
	'front' => array(
		'메인 페이지',
		'프론트(메인화면)에 출력할 콘텐츠를 설정합니다. 미디어셋을 이용해서 프론트를 꾸며주세요.',
		array(
			array('slide','mediaset','슬라이드 포토',''),
			array('people','mediaset','메인전시 인물',''),
		),
	),

	/* 도움말 */
	'help' => array(
		'도움말',
		'이 레이아웃은 킴스큐 2.0 에서 제공하는 모바일 온리(Mobile Only) 레이아웃입니다. 따라서 데스크탑에서는 정상적으로 동작하지 않을 수 있으니 정확한 구현 UI는 실제 모바일 디바이스를 이용해 확인하세요.',
		array(

		),
	),
);

//***********************************************************************************
?>