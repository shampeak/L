/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.image_previewText = ' ';
    config.filebrowserUploadUrl = '/Article/Upload/UserImage';
    config.toolbar =
        [
            ['Source','-','Preview','-','Templates'],
            ['Cut','Copy','Paste','PasteText','PasteFromWord','-', 'Scayt'],
            ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
            ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
            '/',
            ['Bold','Italic','Underline','Strike','-'],
            ['NumberedList','BulletedList','-','Outdent','Indent'],
            ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
            ['Anchor'],
            ['Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
            '/',
            ['Styles','Format','Font','FontSize'],
            ['TextColor','BGColor'],
            ['Maximize', 'ShowBlocks','-','About']
        ];
};
