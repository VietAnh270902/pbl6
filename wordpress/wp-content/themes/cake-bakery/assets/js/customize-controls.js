( function( api ) {

	// Extends our custom "cake-bakery" section.
	api.sectionConstructor['cake-bakery'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );