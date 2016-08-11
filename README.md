# Kirby Color List
![Version](https://img.shields.io/badge/version-1.0.0-green.svg)

A color picker in the form of a list of colors for [Kirby](http://getkirby.com)

![](https://github.com/Thiousi/kirby-color-list/blob/master/screenshot.jpg)

## Installation

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following command in your shell from the root folder of your Kirby installation:

```
kirby plugin:install thiousi/kirby-color-list
```

### 2. Manual
Download this archive, extract it and rename it to `colorlist`. Copy the folder to your `site/plugins` folder.

## Usage
In  your blueprint:

```
  color:
    label: Color list
    type: colorlist
    options: 
      - "#eb1717"
      - "#28db78"
      - "#333333"
      - "#e74c3c"
      - "#353a62"
      - "#9b59b6"
      - "#d45353"
      - "#ffd041"
      - "#e91e63"
```

### Options
The field supports the standard options:
- Default
- Readonly
- Translate
- Help
- Width
- ...

It does not support to query the options from another field. I had planned to implement it but realized it wasn't useful.

## To-do
- [X] Fix default not working
- [X] Fix readonly not working
- [X] Fix field name
- [ ] Display color value in tooltip. Maybe?
- [ ] Make it Kirby CLI and git submodule friendly

## Thanks
- @jenstornell for the Boiler field and his help debugging the field
- @ian-cox for his help designing the field and inspiration with the color field
- @Konstantinfr for his patience

## License
MIT