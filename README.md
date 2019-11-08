# WP Headless Trigger

This plugin was built to make it easier for developers to use WordPress as a headless CMS.
It makes it a breeze to trigger builds in hostings like [ZEIT Now](https://zeit.co/home) or [Netlify](https://www.netlify.com/) whenever content is created or updated.

This plugin uses the `save_post` WordPress hook and makes a POST request to the webhook that you specified each time a post, page or custom post type is publish or updated.

## Installation

You can download the .zip file from [the github repo](https://github.com/nicoandrade/wp-headless-trigger.git) or clone the repository into the plugins folder using the following code.

```
git clone https://github.com/nicoandrade/wp-headless-trigger.git
```

Next you have to install and activate the plugin within the wordpress admin. Once activated, grab the webhook url from your hosting and enter it into the plugin settings page under Tools > Headless Trigger.

## Screenshots

<p align="left">
  <img src="https://cl.ly/e13c24a47adb/screenshot.png" alt="Settings page in WordPress admin">
</p>
