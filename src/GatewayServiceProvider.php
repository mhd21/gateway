<?php

namespace Larabookir\Gateway;

use Illuminate\Support\ServiceProvider;

class GatewayServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		app()->configure('gateway');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('gateway', function () {
			return new GatewayResolver();
		});

	}
}
