# Kirby Color List
**ALPHA VERSION**
A color picker in the form of a list of colors for Kirby

## Installation
Copy `colorlist` folder to your `site/fields` folder. If it doesn't exist, create it.

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

## To-do
- [ ] Add support for fetching remote data (like radio, select, etc)
- [ ] Test (not sure default is working)
- [ ] Display color value in tooltip maybe?
- [ ] Make it Kirby CLI and git submodule friendly

## Thanks
- @jenstornell for the Boiler field
- @ian-cox for his help designing the field and inspiration with the color field
- @Konstantinfr for his patience
