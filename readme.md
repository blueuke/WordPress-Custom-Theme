# Custom WordPress Template

Welcome to the repository for my Custom WordPress Template. This template is designed to showcase my skills in WordPress development, including custom theme creation, responsive design, SEO optimization, and performance enhancements. Below, you'll find details on the features, installation instructions, and usage guidelines.

**"Simplicity is the ultimate sophistication."** - Leonardo Da Vinci

## Contact Information

- Email: [vladimir.dukoski@gmail.com](mailto:vladimir.dukoski@gmail.com)
- GitHub: [blueuke](https://github.com/blueuke)
- Name: Vladimir Dukoski

## Intro

Not your everyday readme file. This template employs "use case methodology," which separates style from pages, global components, and dynamically loads styles to include skeleton loading. 

## Theme Setup

`wp_plugin_edits` loads files from each of its child folders automatically if they are named `index.php`. If new files are created, they need to be linked in the `index.php` of the plugin folder being worked with.

Templates and theme setup are organized using "use case methodology," a system designed to tailor each WordPress custom theme file to the specific needs of a site.

## Definitions

- **Playground**: A file where we can test code.

## Rules

0. **Consistency**: Follow the existing code style for a cohesive structure.
1. **Naming Conventions**:
   - **Folders**: All lowercase with underscores for spaces and a brief category description (e.g., `custom_post_types`).
   - **Files**: All lowercase with hyphens for spaces and a brief description.
2. **Creating New Folders**:
   - Use the naming convention and place the folder in a suitable directory.
   - A folder should always exist even if it contains only one file.
   - When creating a subfolder and moving files, search for and update the original path with the new path.
3. **File Architecture and Explanation**:
   - **Theme Setup**:
     - `error_handling`: Code designed for handling errors and warnings from the Infomaniak error log.
     - `global_functions`: Functions used once or multiple times.
     - `shortcodes`: All shortcodes.
     - `wp_edits`: Code that alters WordPress default settings and features, or adds new ones in the dashboard.
     - `wp_header_footer`: Code inserted in the header or footer of the site.
     - `wp_plugin_edits`: Code that modifies plugins, both front end and back end. The theme automatically imports the new folder's content if placed in an `index.php` file of the newly created folder.
     - `playground.php`: File used for testing code and ideas, which are then moved to the proper files and folders.
4. **Writing Hooks and Filters**:
   - Always call the filter or action hook first, followed by the function declaration. Follow existing examples.
5. **Writing Comments**:
   - Ensure to write comments using `// Text`. Use the search term `// ` with a space to find comments easily.

## Installation

To install and use this custom WordPress template, follow these steps:

1. **Download the Repository**: Clone or download the repository to your local machine.
    ```sh
    git clone https://github.com/blueuke/custom-wordpress-template.git
    ```

2. **Upload to WordPress**: Upload the template files to the `wp-content/themes/` directory of your WordPress installation.

3. **Activate the Theme**: Log in to your WordPress admin dashboard, go to `Appearance > Themes`, and activate the Custom WordPress Template.

4. **Install Required Plugins**: Some features may require additional plugins. You will be prompted to install and activate these plugins upon theme activation.

## Usage

### Customizing the Theme

- **Theme Customizer**: Go to `Appearance > Customize` to make changes to the theme. You can modify the site title, tagline, colors, background image, and more with live preview.

### Adding Content

- **Custom Post Types**: Utilize the custom post types included in this template for a more dynamic content structure.
- **Widgets**: Go to `Appearance > Widgets` to add or remove custom widgets.

### Optimizing for SEO

- **SEO Settings**: This theme includes built-in SEO settings. Go to `SEO` in the admin dashboard to configure meta tags, sitemaps, and other SEO-related settings.

## Contributing

If you would like to contribute to the development of this template, please follow these guidelines:

1. **Fork the Repository**: Create a fork of this repository to your own GitHub account.
2. **Create a Branch**: Create a new branch for your feature or bugfix.
    ```sh
    git checkout -b feature-name
    ```
3. **Commit Your Changes**: Make your changes and commit them with a descriptive message.
    ```sh
    git commit -m "Add new feature"
    ```
4. **Push to the Branch**: Push your changes to your forked repository.
    ```sh
    git push origin feature-name
    ```
5. **Create a Pull Request**: Open a pull request to this repository with a detailed description of your changes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Contact

For any questions, suggestions, or issues, please open an issue in this repository or contact me at [vladimir.dukoski@gmail.com](mailto:vladimir.dukoski@gmail.com).

---

Thank you for checking out my custom WordPress template. I hope it demonstrates my capabilities in WordPress development. If you have any feedback, I would love to hear from you.

# Code Documentation

Here starts the code documentation for the custom theme that will be developed.
```
