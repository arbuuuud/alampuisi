# Enquire Plugin

A simple, extensible enquireging platform for October CMS.

!![560x315](https://player.vimeo.com/video/97088926)

## Editing enquiries

The plugin uses the markdown markup for the enquiries. You can use any Markdown syntax and some special tags for embedding images and videos (requires Mindimedia Enquire Video plugin). To embed an image use the image placeholder:

    ![1](image)

The number in the first part is the placeholder index. If you use multiple images in a enquire you should use an unique index for each image:

    ![1](image)

    ![2](image)

You can also add classes or ids to images by using the [markdown extra](http://michelf.ca/projects/php-markdown/extra/) syntax:

    ![1](image){#id .class}

## Implementing front-end pages

The plugin provides several components for building the enquire list page (archive), category page, enquire details page and category list for the sidebar.

### Enquire list page

Use the `enquireEnquiries` component to display a list of latest enquire enquiries on a page. The component has the following properties:

* **pageNumber** - this value is used to determine what page the user is on, it should be a routing parameter for the default markup. The default value is **{{ :page }}** to obtain the value from the route parameter `:page`.
* **categoryFilter** - a category slug to filter the enquiries by. If left blank, all enquiries are displayed.
* **enquiriesPerPage** - how many enquiries to display on a single page (the pagination is supported automatically). The default value is 10.
* **noEnquiriesMessage** - message to display in the empty enquire list.
* **sortOrder** - the column name and direction used for the sort order of the enquiries. The default value is **published_at desc**.
* **categoryPage** - path to the category page. The default value is **enquire/category** - it matches the pages/enquire/category.htm file in the theme directory. This property is used in the default component partial for creating links to the enquire categories.
* **enquirePage** - path to the enquire details page. The default value is **enquire/enquire** - it matches the pages/enquire/enquire.htm file in the theme directory. This property is used in the default component partial for creating links to the enquire enquiries.

The enquireEnquiries component injects the following variables to the page where it's used:

* **enquiries** - a list of enquire enquiries loaded from the database.
* **enquirePage** - contains the value of the `enquirePage` component's property.
* **category** - the enquire category object loaded from the database. If the category is not found, the variable value is **null**.
* **categoryPage** - contains the value of the `categoryPage` component's property.
* **noEnquiriesMessage** - contains the value of the `noEnquiriesMessage` component's property.

The component supports pagination and reads the current page index from the `:page` URL parameter. The next example shows the basic component usage on the enquire home page:

    title = "Enquire"
    url = "/enquire/:page?"

    [enquireEnquiries]
    enquiriesPerPage = "5"
    ==
    {% component 'enquireEnquiries' %}

The next example shows the basic component usage with the category filter:

    title = "Enquire Category"
    url = "/enquire/category/:slug/:page?"

    [enquireEnquiries]
    categoryFilter = "{{ :slug }}"
    ==
    function onEnd()
    {
        // Optional - set the page title to the category name
        if ($this->category)
            $this->page->title = $this->category->name;
    }
    ==
    {% if not category %}
        <h2>Category not found</h2>
    {% else %}
        <h2>{{ category.name }}</h2>

        {% component 'enquireEnquiries' %}
    {% endif %}

The enquire list and the pagination are coded in the default component partial `plugins/mindimedia/enquire/components/enquiries/default.htm`. If the default markup is not suitable for your website, feel free to copy it from the default partial and replace the `{% component %}` call in the example above with the partial contents.

### Enquire page

Use the `enquireEnquire` component to display a enquire enquire on a page. The component has the following properties:

* **slug** - the value used for looking up the enquire by its slug. The default value is **{{ :slug }}** to obtain the value from the route parameter `:slug`.
* **categoryPage** - path to the category page. The default value is **enquire/category** - it matches the pages/enquire/category.htm file in the theme directory. This property is used in the default component partial for creating links to the enquire categories.

The component injects the following variables to the page where it's used:

* **enquire** - the enquire enquire object loaded from the database. If the enquire is not found, the variable value is **null**.

The next example shows the basic component usage on the enquire page:

    title = "Enquire Enquire"
    url = "/enquire/enquire/:slug"

    [enquireEnquire]
    ==
    <?php
    function onEnd()
    {
        // Optional - set the page title to the enquire title
        if (isset($this->enquire))
            $this->page->title = $this->enquire->title;
    }
    ?>
    ==
    {% if enquire %}
        <h2>{{ enquire.title }}</h2>

        {% component 'enquireEnquire' %}
    {% else %}
        <h2>Enquire not found</h2>
    {% endif %}

The enquire details is coded in the default component partial `plugins/mindimedia/enquire/components/enquire/default.htm`.

### Category list

Use the `enquireCategories` component to display a list of enquire enquire categories with links. The component has the following properties:

* **slug** - the value used for looking up the current category by its slug. The default value is **{{ :slug }}** to obtain the value from the route parameter `:slug`.
* **displayEmpty** - determines if empty categories should be displayed. The default value is false.
* **categoryPage** - path to the category page. The default value is **enquire/category** - it matches the pages/enquire/category.htm file in the theme directory. This property is used in the default component partial for creating links to the enquire categories.

The component injects the following variables to the page where it's used:

* **categoryPage** - contains the value of the `categoryPage` component's property. 
* **categories** - a list of enquire categories loaded from the database.
* **currentCategorySlug** - slug of the current category. This property is used for marking the current category in the category list.

The component can be used on any page. The next example shows the basic component usage on the enquire home page:

    title = "Enquire"
    url = "/enquire/:page?"

    [enquireCategories]
    ==
    ...
    <div class="sidebar">
        {% component 'enquireCategories' %}
    </div>
    ...

The category list is coded in the default component partial `plugins/mindimedia/enquire/components/categories/default.htm`.

## Using markdown

October supports [standard markdown syntax](http://daringfireball.net/projects/markdown/) as well as [extended markdown syntax](http://michelf.ca/projects/php-markdown/extra/)

### Classes and IDs

Classes and IDs can be added to images and other elements as shown below:

```
[link](url){#id .class}
![1](image){#id .class}
# October  {#id .class}
```

### Fenced code enquires

Markdown extra makes it possible to use fenced code blocks. With fenced code blocks you do not need indentation on the areas you want to mark as code:


    ```
    Code goes here
    ```
    
You can also use the `~` symbol:

    ~~~
    Code goes here
    ~~~

### Tables

A *simple* table can be defined as follows:

```
First Header  | Second Header
------------- | -------------
Content Cell  | Content Cell 
Content Cell  | Content Cell 
```

If you want to you can also add a leading and tailing pipe:

```
| First Header  | Second Header |
| ------------- | ------------- |
| Content Cell  | Content Cell  |
| Content Cell  | Content Cell  |
```

To add alignment to the cells you simply need to add a `:` either at the start or end of a separator:

```
| First Header  | Second Header |
| :------------ | ------------: |
| Content Cell  | Content Cell  |
| Content Cell  | Content Cell  |
```

To center align cell just add `:` on both sides:

```
| First Header  | Second Header |
| ------------- | :-----------: |
| Content Cell  | Content Cell  |
| Content Cell  | Content Cell  |
```

### Definition lists

Below is an example of a simple definition list:

```
Laravel
:   A popular PHP framework

October
:   Awesome CMS built on Laravel
```

A term can also have multiple definitions:

```
Laravel
:   A popular PHP framework

October
:   Awesome CMS built on Laravel
:   Supports markdown extra
```

You can also associate more than 1 term to a definition:

```
Laravel
October
:   Built using PHP
```

### Footnotes

With markdown extra it is possible to create reference style footnotes:

```
This is some text with a footnote.[^1]

[^1]: And this is the footnote.
```

### Abbreviations

With markdown extra you can add abbreviations to your markup. The use this functionality first create a definition list:

```
*[HTML]: Hyper Text Markup Language
*[PHP]:  Hypertext Preprocessor
```

Now markdown extra will convert all occurrences of `HTML` and `PHP` as follows:

```
<abbr title="Hyper Text Markup Language">HTML</abbr>
<abbr title="Hypertext Preprocessor">PHP</abbr>
```
