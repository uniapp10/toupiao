<?php
defined('IN_IA') or exit('Access Denied');
class Tyzm_redpackModuleReceiver extends WeModuleReceiver {
	public function receive() {
		$type = $this->message['type'];
	}