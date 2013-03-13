<?php
Yii::import('ext.sinaWeibo.SinaWeibo',true);

class WeiboController extends XController
{  
	
	public function actionIndex()
	{
		$weiboService = new SinaWeibo(WB_AKEY, WB_SKEY);
		$code_url = $weiboService->getAuthorizeURL( WB_CALLBACK_URL );
		Yii::app()->session['back_url'] = $this->createUrl('weibolist');
		header("Location:".$code_url);
		//echo '<a href="'.$code_url.'">点击授权</a>';	
	}
	
	/**
	 * 微博回调
	 */
	public function actionCallback()
	{
		$weiboService = new SinaWeibo(WB_AKEY, WB_SKEY);
		if (isset($_REQUEST['code'])) {
			$keys = array();
			$keys['code'] = $_REQUEST['code'];
			$keys['redirect_uri'] = WB_CALLBACK_URL;
	
			try {			
				$token = $weiboService->getAccessToken( 'code', $keys );
			} catch (OAuthException $e) {
				echo 'error';
			}
		}

		if ($token) {
			Yii::app()->session['token'] = $token;
			
			/*$cookie1 = Yii::app()->request->getCookies();
			unset($cookie1['weibojs_'.$weiboService->client_id]);

			$cookie = new CHttpCookie('weibojs_'.$weiboService->client_id, http_build_query($token));
			Yii::app()->request->cookies['weibojs_'.$weiboService->client_id] = $cookie;
			*/
			
			echo "<h1>认证已经通过，将会在3秒之后跳转到微博列表页面。如果没有，点击<a href=".Yii::app()->session['back_url'].">这里</a>。</h1>";exit;
			
		} else {
		    echo '认证失败';
		}
	}
	
	/**
	 * 我的微博
	 */
	public function actionWeibolist()
	{
		$token = Yii::app()->session['token'];

		$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $token['access_token']);
		$ms  = $c->home_timeline();
		
		var_dump($ms);Yii::app()->end();
		$uid_get = $c->get_uid();
		$uid = $uid_get['uid'];
		$user_message = $c->show_user_by_id( $uid);//根据ID获取用户等基本信息
					
	}
	
}