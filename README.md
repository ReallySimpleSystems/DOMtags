# DOMtags

## About the project
**DOMtags** are a set of dynamically generated HTML DOM tags created through a series of PHP classes. They are meant for keeping backend code clean in large projects that make use of lots of HTML within the PHP, which can cause unnecessary clutter. I will add support for additional tags/parameters as needed/requested. The project is considered stable and in full release.

## Installation
Place the files in a subdirectory of your root installation, such as an `includes/modules` directory. The license and readme may be removed once installed. DOMtags requires at least PHP 8.0 and will throw fatal errors on 7.4 or lower.

## Supported tags
**Syntax:**
- `domTag(<tag_name (string)>, <args (array)>)` (returns the tag)
- `domTagPr(<tag_name (string)>, <args (array)>)` (displays the tag)

**Tags:**
- *Container tags*
  - `article` { [article tag](https://www.w3schools.com/tags/tag_article.asp) }
  - `aside` { [aside tag](https://www.w3schools.com/tags/tag_aside.asp) }
  - `div` { [division tag](https://www.w3schools.com/tags/tag_div.asp) }
  - `nav` { [navigation links tag](https://www.w3schools.com/tags/tag_nav.asp) }
  - `section` { [section tag](https://www.w3schools.com/tags/tag_section.asp) }
  - `span` { [span tag](https://www.w3schools.com/tags/tag_span.asp) }
- *Doc/media tags*
  - `audio` { [audio tag](https://www.w3schools.com/tags/tag_audio.asp) }
  - `iframe` { [inline frame tag](https://www.w3schools.com/tags/tag_iframe.asp) }
  - `img` { [image tag](https://www.w3schools.com/tags/tag_img.asp) }
  - `picture` { [picture tag](https://www.w3schools.com/tags/tag_picture.asp) }
  - `source` { [media source tag](https://www.w3schools.com/tags/tag_source.asp) }
  - `video` { [video tag](https://www.w3schools.com/tags/tag_video.asp) }
- *Form/action tags*
  - `a` { [anchor tag](https://www.w3schools.com/tags/tag_a.asp) }
  - `button` { [button tag](https://www.w3schools.com/tags/tag_button.asp) }
  - `fieldset` { [fieldset tag](https://www.w3schools.com/tags/tag_fieldset.asp) }
  - `form` { [form tag](https://www.w3schools.com/tags/tag_form.asp) }
  - `input` { [input tag](https://www.w3schools.com/tags/tag_input.asp) }
  - `label` { [label tag](https://www.w3schools.com/tags/tag_label.asp) }
  - `legend` { [legend tag](https://www.w3schools.com/tags/tag_legend.asp) }
  - `option` { [option tag](https://www.w3schools.com/tags/tag_option.asp) }
  - `select` { [select tag](https://www.w3schools.com/tags/tag_select.asp) }
  - `textarea` { [textarea tag](https://www.w3schools.com/tags/tag_textarea.asp) }
- *List tags*
  - `li` { [list item tag](https://www.w3schools.com/tags/tag_li.asp) }
  - `ol` { [ordered list tag](https://www.w3schools.com/tags/tag_ol.asp) }
  - `ul` { [unordered list tag](https://www.w3schools.com/tags/tag_ul.asp) }
- *Overhead tags*
  - `link` { [resource link tag](https://www.w3schools.com/tags/tag_link.asp) }
  - `meta` { [metadata tag](https://www.w3schools.com/tags/tag_meta.asp) }
  - `noscript` { [noscript tag](https://www.w3schools.com/tags/tag_noscript.asp) }
  - `script` { [script tag](https://www.w3schools.com/tags/tag_script.asp) }
  - `title` { [title tag](https://www.w3schools.com/tags/tag_title.asp) }
- *Separator tags*
  - `br` { [line break tag](https://www.w3schools.com/tags/tag_br.asp) }
  - `hr` { [horizontal rule tag](https://www.w3schools.com/tags/tag_hr.asp) }
- *Table tags*
  - `table` { [table tag](https://www.w3schools.com/tags/tag_table.asp) }
  - `td` { [table data tag](https://www.w3schools.com/tags/tag_td.asp) }
  - `th` { [table header tag](https://www.w3schools.com/tags/tag_th.asp) }
  - `tr` { [table row tag](https://www.w3schools.com/tags/tag_tr.asp) }
- *Text/formatting tags*
  - `abbr` { [abbreviation tag](https://www.w3schools.com/tags/tag_abbr.asp) }
  - `b` { [bold text tag](https://www.w3schools.com/tags/tag_b.asp) }
  - `code` { [code tag](https://www.w3schools.com/tags/tag_code.asp) }
  - `em` { [emphasized text tag](https://www.w3schools.com/tags/tag_em.asp) }
  - `i` { [italic text tag](https://www.w3schools.com/tags/tag_i.asp) }
  - `h1`, `h2`, `h3`, `h4`, `h5`, `h6` { [heading tags](https://www.w3schools.com/tags/tag_hn.asp) }
  - `p` { [paragraph tag](https://www.w3schools.com/tags/tag_p.asp) }
  - `small` { [small text tag](https://www.w3schools.com/tags/tag_small.asp) }
  - `strong` { [strong importance tag](https://www.w3schools.com/tags/tag_strong.asp) }

## License
Copyright (c) 2023-2026 [Jace Fincham](https://jacefincham.com/)<br>
The DOMtags library is released under the [GNU General Public License v3.0](http://www.gnu.org/licenses/gpl-3.0.html).