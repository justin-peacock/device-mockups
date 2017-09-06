module.exports = {
	/**
	 * grunt-wp-i18n
	 *
	 * Internationalize WordPress themes and plugins.
	 *
	 * @link https://www.npmjs.com/package/grunt-wp-i18n
	 */
	prod: {
		options: {
			domainPath: '/languages/',
			potFilename: '<%= package.name %>.pot',
			type: 'wp-plugin',
			potHeaders: {
				poedit: true,
				'x-poedit-keywordslist': true,
				'report-msgid-bugs-to': 'https://wordpress.org/support/plugin/device-mockups',
				'last-translator': 'hello@byjust.in'
			}
		}
	}
};
