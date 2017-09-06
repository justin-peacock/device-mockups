module.exports = {
	/**
	 * grunt-phpcs
	 *
	 * Grunt plugin for running PHP Code Sniffer.
	 *
	 * @link https://www.npmjs.com/package/grunt-phpcs
	 */
	dev: {
		options: {
			map: false,
			processors: [
				require( 'autoprefixer' )( {
					browsers: ['last 2 versions']
				} ),
				require( 'postcss-prettify' )
			]
		},
		src: ['css/*.css', 'admin/*.css']
	}
};
