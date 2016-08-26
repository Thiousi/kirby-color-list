# Kirby Color List
![Version](https://img.shields.io/badge/version-1.0.0-green.svg) ![License](https://img.shields.io/badge/license-MIT-green.svg) ![Kirby Version](https://img.shields.io/badge/Kirby-2.3%2B-red.svg)

A color picker in the form of a list of colors for [Kirby](http://getkirby.com)

![Kirby Color List](https://github.com/Thiousi/kirby-color-list/blob/master/screenshot.jpg)

## Installation

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following command in your shell from the root folder of your Kirby installation:

```
kirby plugin:install thiousi/kirby-color-list
```

### 2. Manual
Download this archive, extract it and rename it to `colorlist`. Copy the folder to your `site/plugins` folder.

### 3. Git Submodule
If you know your way around git, you can download this as a submodule:

```
git submodule add https://github.com/Thiousi/kirby-color-list/ site/plugins/colorlist
```

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

Because the field uses background-color, you can use any type of colors as options, and even mix them up:

```
- "#fff"
- "rgba(255,255,255,0.5)"
- "rgb(255,255,255)"
- "red"
```

### Options
There is a custom option to allow the radio buttons to be unselected (with js), `unset`:
**BUG** This feature currently only works visually. Help needed!

```
 color:
    label: Color list
    type: colorlist
    unset: true
    options:
      - "#eb1717"
      - "#28db78"
```

The field supports the standard options:

```
- Default
- Readonly
- Translate
- Help
- Width
- ...
```

It does not support to query the options from another field. I had planned to implement it but realized it wasn't useful.

## To-do
- [X] ~~Fix default not working~~
- [X] ~~Fix readonly not working~~
- [X] ~~Fix field name~~
- [X] ~~Make it Kirby CLI and git submodule friendly~~
- [X] ~~Allow radios to be unset with field option~~
- [ ] Display color value in tooltip. Maybe?

## Thanks
- [@jenstornell](https://github.com/jenstornell) for the Boiler field and his help debugging the field
- [@ian-cox](https://github.com/ian-cox) for his help designing the field and inspiration with the color field
- [@malvese](https://github.com/malvese) for testing
- [@Konstantinfr](https://github.com/constantinjoly/) for his patience and front-end help

## License
MIT
