<?php
class Attachment extends AppModel {

	public $name = 'Attachment';
	public $useTable = 'attachments';

	public $actsAs = array(
        'Upload.Upload' => array(
            'attachment' => array(
                'thumbnailSizes' => array(
//                     'xvga' => '1024x768',
//                     'vga' => '640x480',
                    'thumb' => '80x80',
                ),
            		'deleteOnUpdate' => 'true',
            ),
        ),
    );

    public $belongsTo = array(
        'Cliente' => array(
            'className' => 'Cliente',
            'foreignKey' => 'foreign_key',
        ),
    );
}
