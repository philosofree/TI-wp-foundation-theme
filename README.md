# Tunapanda Wordpress Foundation Theme

**This is a Wordpress Theme using [Foundation for Sites 6](http://foundation.zurb.com/sites) for the Tunapanda swag platform**

The [Underscores Wordpress Starter Theme](http://underscores.me/) was used as a starting point for this theme and many Foundation setup features were borrowed from the [JointsWP Theme](https://github.com/JeremyEnglert/JointsWP).

Follow the instructions below to get started. 

## Installation

To use this template, your computer needs:

- [NodeJS](https://nodejs.org/en/) (0.12 or greater)
- [NPM](https://www.npmjs.com/)
- [Bower](http://bower.io/)
- [Git](https://git-scm.com/)
- [Foundation CLI](http://foundation.zurb.com/sites)
- [Wordpress](https://wordpress.org/)

### Instructions

**Install Node:**

Follow the instructions for your operating system at [nodejs.org](https://nodejs.org/en/) (NPM should be installed as part of the Node installation).

**Install Bower:**

```bash
npm install -g bower
```

**Install Git:**

Download and install the appropriate package for your operating system from [here](http://git-scm.com/downloads).

**Install the Foundation CLI with this command:**

```bash
npm install foundation-cli --global
```

**Download or Clone this Repo**
Download or Clone this repo into your themes folder. 

### Setup

To manually set up the template, first download it with Git:

```bash
git clone https://github.com/tunapanda/TI-wp-foundation-theme <folder-name>
```

Then open the folder in your command line, and install the needed dependencies:

```bash
npm install
bower install
```

Finally, run `npm start` to run the Sass compiler. It will re-run every time you save a Sass file.
