<?php namespace web\api\controller;

class User {

	/**
	 * @api {get} /user/:id 用户列表
	 * @apiSampleRequest  /user/index
	 * @apiPermission none
	 * @apiName index
	 * @apiGroup User
	 * @apiVersion 1.0.0
	 * @apiDescription 根据用户编号获取用户的信息
	 * @apiParam {Number} id 会员编号
	 * @apiSuccess {string} username 用户名
	 * @apiSuccess {string} mail 邮箱
	 * @apiSuccessExample {json} Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *       "uid": "1",
	 *       "username": "用户",
	 *       "mail":"邮箱"
	 *     }
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 404 Not Found
	 *     {
	 *       "valid": 0,
	 *       "message":" user not found"
	 *     }
	 */
	public function index() {
		echo 'index22';
	}

	/**
	 * @api {get} /user/:id 获取用户
	 * @apiSampleRequest  /user/1
	 * @apiPermission none
	 * @apiName show
	 * @apiGroup User
	 * @apiVersion 1.0.0
	 * @apiDescription 根据用户编号获取用户的信息
	 * @apiSuccess {string} username 用户名
	 * @apiSuccess {string} mail 邮箱
	 * @apiSuccessExample {json} Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *       "uid": "1",
	 *       "username": "用户",
	 *       "mail":"邮箱"
	 *     }
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 404 Not Found
	 *     {
	 *       "valid": 0,
	 *       "message":" user not found"
	 *     }
	 */
	public function show( $id ) {
		$res = Db::table( 'user' )->find( $id );
		if ( $res ) {
			return [ 'valid' => 1, 'data' => $res ];
		} else {
			return [ 'valid' => 0, 'message' => '用户不存在' ];
		}
	}

}