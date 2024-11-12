let { registerBlockStyle } = wp.blocks;
function allStyles() {
    [   
        'core/group', 
        'acf/accordion'
    ].forEach((block) => {
		registerBlockStyle(block, {
			name: 'my-custom-style',
			label: 'Custom',
		});
	});
}
allStyles();