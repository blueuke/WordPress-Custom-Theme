"Simplicity is the ultimate sophistication." Leonardo Da Vinci 
email - vladimir.dukoski@gmail.com
git - https://github.com/blueuke
Vladimir Dukoski

# Intro
Not your everyday readme file.

Style is using "use case methodology" and will build the style seperatly from the pages, global and components. Also it will be specified where its loaded using and set a dynamic code that will lazy load the style. This allows to include skeleton load. 

Theme Setup
  wp_plugin_edits loads the file from each of its child folders automatically if they are named index.php, if new files are created they need to be linked in the index.php of the plugin folder we are working with.

Templates parts theme setup are using "use case methodology". 

What is use case methodology? Its a methodology that i came up with that will serve each WordPress custom theme file to be organized and structured based on each sites needs, there for the name Use Case. 

Function is just connecting everything together

# Definitions 
  Playground is a name of the file where we can test code.
 
# Rules
0. Just follow the looks and feel of the existing code and everything will be flowing. 
  
1. Naming Conventions
   Folders: all in lowercase "_" for space and a short description of the category the files inside belong to. Example: custom_post_types 
   Files: all in lowercase "-" for space and a short description of the category

2. Creating new folders
   Use the naming convention and place the folder in a suitable directory.
   A folder will always exist even if there is only one file in it. 
   When creating a sub folder and mouving some of the files there. Search for the original path and replace it with the new path. 

3. File architecture and Explanation
   #Theme Setup
    error_handling
      - Code that is desgined for handling errors and warnings that we get from infomaniak error log 
    global_functions
      - All the functions that we are using once or multiple times  
    shortcodes
      - All the shorcodes
    wp_edits
      - All the code that alters the wp default settings and features, or adds new onse in the dashboard
    wp_header_footer
      - Code that is inserted eather in the header or the footer of the site
    wp_plugin_edits
      - Code that modifies the plugins, front end or backend. 
      - Applies only to this folder. The theme automatically imports the new folders content if its placed in a index.php file of the newly created folder.
    playground.php
      - This file is used for testing code and ideas, after which the code will be moved to the proper files and folders

4. Writing Hooks and Filters
   Always first call the filter or actin hook after that declare the function. Follow the existing examples. 

5. Writing comments 
   Make sure to write comments, and always write them '// Text'. Try searching for "// " with the empty space. 


# Code Documentation
Here starts the code documentation for the custom theme that will be develped.