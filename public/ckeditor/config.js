/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {

	// %REMOVE_START%
	// The configuration options below are needed when running CKEditor from source files.
	config.plugins = 'dialogui,dialog,about,a11yhelp,dialogadvtab,basicstyles,bidi,blockquote,notification,button,toolbar,clipboard,panelbutton,panel,floatpanel,colorbutton,colordialog,templates,menu,contextmenu,copyformatting,div,editorplaceholder,resize,elementspath,enterkey,entities,exportpdf,popup,filetools,filebrowser,find,fakeobjects,flash,floatingspace,listblock,richcombo,font,forms,format,horizontalrule,htmlwriter,iframe,wysiwygarea,image,indent,indentblock,indentlist,smiley,justify,menubutton,language,link,list,liststyle,magicline,maximize,newpage,pagebreak,pastetext,pastetools,pastefromgdocs,pastefromword,preview,print,removeformat,save,selectall,showblocks,showborders,sourcearea,specialchar,scayt,stylescombo,tab,table,tabletools,tableselection,undo,lineutils,widgetselection,widget,notificationaggregator,uploadwidget,uploadimage,wsc,placeholder,placeholder_select,placeholder_custom_labels,ccmsacdc';
	// %REMOVE_END%

/*
    // The toolbar groups arrangement, optimized for two toolbar rows.
    config.toolbarGroups = [
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
        { name: 'links' },
        { name: 'insert' },
        { name: 'forms' },
        { name: 'tools' },
        { name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'others' },
        '/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
        { name: 'styles' },
        { name: 'colors' },
        { name: 'about' },
        { name: 'holders', groups: ['placeholder_select']}
    ];
*/

	// Define changes to default configuration here. For example:
    config.removeButtons = 'About';   //non serve a un cazzo
    config.language = 'it';           //sembra che la riconosca cmq
    // Qui posso gestirmi la grafica del ckeditor: per ora ho scaricato solo queste due skin
    // config.skin = 'kama';
    config.skin = 'moonocolor';
	// config.uiColor = '#AADC6E';    //trovarne uno carino
    config.height = 400;
    config.toolbarCanCollapse = true; //inutile, con un clic posso far scomparire la toolbar superiore
    // Simplify the dialog windows.
    config.removeDialogTabs = 'flash:advanced;image:advanced;link:advanced';

    // Elenco Placeholders del plugin placeholder_select
    // Si può commentare dato che i placeholder li importo subito dopo
    config.placeholder_select = {
        placeholders: ['gino','strada','gianni']
    };

    // Placeholders presi dal DB dalla tabella chapters
    $.ajax({
        url: "/getPlaceholder",
        method: "GET",
        success: function (data) {
            config.placeholder_select = {
                placeholders: data
            };
        }
    });

    // Elenco Placeholders del plugin placeholder_custom_labels
    // config.placeholder_custom_labels = {
    //     placeholders: ['gino','strada','gianni']
    // };
};
