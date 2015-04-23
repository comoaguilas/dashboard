<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model {

	protected $table = 'configurations';

	public function scopeAppName () {
		return $this->getByType('appName');
  }

	public function scopeSiteName () {
		return $this->getByType('siteName');
  }

	public function getByType ($type) {
		$data = Configuration::whereType($type)
		->first()->desc;
		return $data;
  }

}
