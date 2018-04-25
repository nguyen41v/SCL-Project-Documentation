# Making and Editing a Child Theme

* sqaure-child contains files for a child theme of the parent them "Square". This allows for safe customization of the parent theme.

### Creation
* Need to compress square-child files into a ZIP folder before the initial upload onto Wordpress, or log onto the server host (webhost000.com or hostinger.com for this site) and upload the file through there (can also use an FTP client but had trouble doing this). The child theme needs a style.css and a functions.php file (the format of these files can be found in the link below). Activate the child theme once you make it.

[Useful Link on Making Child Themes](https://codex.wordpress.org/Child_Themes)

### Editing
* You can update the files through the WordPress editor by copying and pasting changes, or by reuploading the files through the server host or an FTP client. If you want to add new files you have to upload them.
* Child theme functions.php gets added along with the parent theme functions.php. To edit a specific page (ex. the homepage or search page), you can make a new file in the child theme with the same name as the file in the parent theme.
* You can edit the CSS with the built in Custom CSS in WordPress when you click on *Customize* for a theme, but you can also edit the CSS through the style.css file in the child theme. It's best to have your CSS in the style.css sheet too (just copy and paste it), that way you can have it on file.
* PHP and JavaScript codes and examples can be found online through Google searches.

* This information is also found under /Wordpress site codes/README
