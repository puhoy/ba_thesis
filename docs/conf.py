import sys, os

# directory relative to this conf file
CURDIR = os.path.abspath(os.path.dirname(__file__))
# add custom extensions directory to python path
sys.path.append(os.path.join(os.path.abspath(os.path.dirname(__file__)), 'extensions'))

# import the custom html and latex builders/translators/writers
import html_mods
import latex_mods

# If your documentation needs a minimal Sphinx version, state it here.
# needs_sphinx = '1.0'

# import order is important here
extensions = [
    'fix_equation_ref',
    'sphinx.ext.mathjax',
    'sphinx.ext.ifconfig',
    'subfig',
    'numfig',
    'numsec',
    'natbib',
    'figtable',
    'singlehtml_toc',
    'singletext',
]

# Add any paths that contain templates here, relative to this directory.
templates_path = ['templates']

# The suffix of source filenames.
source_suffix = '.rst'

# The encoding of source files.
source_encoding = 'utf-8-sig'

# General information about the project.
project = u'The Sphinx Thesis Resource (sphinxtr)'
author = u'Jeff Terrace'
copyright = u'by %s, 2012.' % author
version = '0.1'
release = '0.1'

# Turns on numbered figures for HTML output
number_figures = True

# configures bibliography
# see http://wnielson.bitbucket.org/projects/sphinx-natbib/
natbib = {
    'file': 'refs.bib',
    'brackets': '[]',
    'separator': ',',
    'style': 'numbers',
    'sort': True,
}

# List of patterns, relative to source directory, that match files and
# directories to ignore when looking for source files.
exclude_patterns = [
    '_build',
    'tex',
    'epilog.rst',
    'README.rst',
]

# The master toctree document.
# Ideally, we wouldn't have to do this, but sphinx seems to have trouble with
# directives inside only directives
if tags.has('latex'):
    master_doc = 'index_tex'
    exclude_patterns.append('index.rst')
else:
    master_doc = 'index'
    exclude_patterns.append('index_tex.rst')

# A string of reStructuredText that will be included at the end of
# every source file that is read.
rst_epilog = open(os.path.join(CURDIR, 'epilog.rst'), 'r').read().decode('utf8')

# The name of the Pygments (syntax highlighting) style to use.
pygments_style = 'sphinx'

# -- Options for HTML output ---------------------------------------------------

# The theme to use for HTML and HTML Help pages.  See the documentation for
# a list of builtin themes.
html_theme = 'sphinxdoc'

# Theme options are theme-specific and customize the look and feel of a theme
# further.  For a list of options available for each theme, see the
# documentation.
# html_theme_options = {}

# Add any paths that contain custom themes here, relative to this directory.
# html_theme_path = []

# The name for this set of Sphinx documents.  If None, it defaults to
# "<project> v<release> documentation".
html_title = "%s" % project

# A shorter title for the navigation bar.  Default is the same as html_title.
html_short_title = "Someone's PhD Thesis"

# The name of an image file (relative to this directory) to place at the top
# of the sidebar.
# html_logo = None

# The name of an image file (within the static path) to use as favicon of the
# docs.  This file should be a Windows icon file (.ico) being 16x16 or 32x32
# pixels large.
# html_favicon = None

# Add any paths that contain custom static files (such as style sheets) here,
# relative to this directory. They are copied after the builtin static files,
# so a file named "default.css" will overwrite the builtin "default.css".
html_static_path = ['static']

# If not '', a 'Last updated on:' timestamp is inserted at every page bottom,
# using the given strftime format.
# html_last_updated_fmt = '%b %d, %Y'

# If true, SmartyPants will be used to convert quotes and dashes to
# typographically correct entities.
# html_use_smartypants = True

# Custom sidebar templates, maps document names to template names.
template_files = ['localtoc.html', 'relations.html', 'sourcelink.html']
if not tags.has('singlehtml'):
    # only include search box for regular html, not single page html
    template_files.append('searchbox.html')
html_sidebars = {
    '**': template_files,
}

# Additional templates that should be rendered to pages, maps page names to
# template names.
# html_additional_pages = {}

# If false, no module index is generated.
html_domain_indices = False

# If false, no index is generated.
html_use_index = False

# If true, the index is split into individual pages for each letter.
# html_split_index = False

# If true, links to the reST sources are added to the pages.
# html_show_sourcelink = True

# If true, "Created using Sphinx" is shown in the HTML footer. Default is True.
# html_show_sphinx = True

# If true, "(C) Copyright ..." is shown in the HTML footer. Default is True.
# html_show_copyright = True

# If true, an OpenSearch description file will be output, and all pages will
# contain a <link> tag referring to it.  The value of this option must be the
# base URL from which the finished HTML is served.
# html_use_opensearch = ''

# This is the file name suffix for HTML files (e.g. ".xhtml").
# html_file_suffix = None

# supresses the last dot in section numbers
# changes "1. Introduction" -> "1 Introduction"
# default string is ". "
html_secnumber_suffix = " "

# Output file base name for HTML help builder.
htmlhelp_basename = 'htmlhelpoutput'

# location of mathjax script if you don't want to use CDN
# mathjax_path = 'MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML'




# -- Options for LaTeX output --------------------------------------------------

ADDITIONAL_PREAMBLE = """
\input{preamble._tex}
\usepackage{sphinx}
"""

ADDITIONAL_FOOTER = """
\input{footer._tex}
"""

latex_elements = {
    # The paper size ('letterpaper' or 'a4paper').
    'papersize': 'letterpaper',

    # * gets passed to \documentclass
    # * default options are single sided, double spaced
    #   you can change them with these options:
    #   * twoside
    #   * singlespace
    # * you might want to omit the list of tables (lot)
    #   if you use figtable without the :nofig: option
    'classoptions': ',english,lof,lot',

    # The font size ('10pt', '11pt' or '12pt').
    'pointsize': '12pt',

    # Additional stuff for the LaTeX preamble.
    'preamble': ADDITIONAL_PREAMBLE,

    # Additional footer
    'footer': ADDITIONAL_FOOTER,

    # disable font inclusion
    'fontpkg': '',
    'fontenc': '',

    # disable fancychp
    'fncychap': '',

    # get rid of the sphinx wrapper class file
    'wrapperclass': 'puthesis',

    # override maketitle
    'maketitle': '\makefrontmatter',
    'tableofcontents': '',

    # disable index printing
    'printindex': '',
}

# Grouping the document tree into LaTeX files. List of tuples
# (source start file, target name, title, author, documentclass [howto/manual]).
latex_documents = [
    ('index_tex',
     'thesis.tex',
     project,
     author,
     'manual',
     True),
]

latex_docclass = {
    'manual': 'puthesis',
}

latex_additional_files = [
    'tex/puthesis.cls',
    'tex/preamble._tex',
    'tex/footer._tex',
    'tex/sphinx.sty',
    'tex/Makefile',
    'tex/refstyle.bst',
    'refs.bib',
    'tex/ccicons.sty',
]

# The name of an image file (relative to this directory) to place at the top of
# the title page.
# latex_logo = None

# For "manual" documents, if this is true, then toplevel headings are parts,
# not chapters.
latex_use_parts = False

# If true, show page references after internal links.
# latex_show_pagerefs = False

# If true, show URL addresses after external links.
# latex_show_urls = False

# Documents to append as an appendix to all manuals.
# latex_appendices = []

# If false, no module index is generated.
latex_domain_indices = False



#!/usr/bin/env python3
# -*- coding: utf-8 -*-
#
# tools documentation build configuration file, created by
# sphinx-quickstart on Mon Jun 13 16:39:26 2016.
#
# This file is execfile()d with the current directory set to its
# containing dir.
#
# Note that not all possible configuration values are present in this
# autogenerated file.
#
# All configuration values have a default; values that are commented out
# serve to show the default.

# If extensions (or modules to document with autodoc) are in another directory,
# add these directories to sys.path here. If the directory is relative to the
# documentation root, use os.path.abspath to make it absolute, like shown here.
#
import os
import sys
import sphinx_rtd_theme

from recommonmark.parser import CommonMarkParser

# directory relative to this conf file
CURDIR = os.path.abspath(os.path.dirname(__file__))
# add custom extensions directory to python path
sys.path.append(os.path.join(os.path.abspath(os.path.dirname(__file__)), 'extensions'))


sys.path.insert(0, os.path.abspath('.'))

# -- General configuration ------------------------------------------------

# If your documentation needs a minimal Sphinx version, state it here.
#
# needs_sphinx = '1.0'

# Add any Sphinx extension module names here, as strings. They can be
# extensions coming with Sphinx (named 'sphinx.ext.*') or your custom
# ones.
extensions = [
    'sphinxcontrib.bibtex',
    'sphinx_numfig',
    'sphinx.ext.autodoc',
    'sphinx.ext.todo',
    'sphinx.ext.viewcode',
]

# Add any paths that contain templates here, relative to this directory.
templates_path = ['_templates']

# The suffix(es) of source filenames.
# You can specify multiple suffix as a list of string:
#
source_parsers = {
    '.md': CommonMarkParser,
}
source_suffix = ['.rst', '.md']

# The encoding of source files.
#
# source_encoding = 'utf-8-sig'

# The master toctree document.
master_doc = 'index'

# General information about the project.
project = 'ba_thesis'
copyright = '2016, Jan Hartmann'
author = 'Jan Hartmann'

# The version info for the project you're documenting, acts as replacement for
# |version| and |release|, also used in various other places throughout the
# built documents.
#
# The short X.Y version.
version = ''
# The full version, including alpha/beta/rc tags.
release = ''

# The language for content autogenerated by Sphinx. Refer to documentation
# for a list of supported languages.
#
# This is also used if you do content translation via gettext catalogs.
# Usually you set "language" from the command line for these cases.
language = 'en'

# There are two options for replacing |today|: either, you set today to some
# non-false value, then it is used:
#
# today = ''
#
# Else, today_fmt is used as the format for a strftime call.
#
# today_fmt = '%B %d, %Y'

# List of patterns, relative to source directory, that match files and
# directories to ignore when looking for source files.
# This patterns also effect to html_static_path and html_extra_path
exclude_patterns = ['_build', 'Thumbs.db', '.DS_Store']

# The reST default role (used for this markup: `text`) to use for all
# documents.
#
# default_role = None

# If true, '()' will be appended to :func: etc. cross-reference text.
#
# add_function_parentheses = True

# If true, the current module name will be prepended to all description
# unit titles (such as .. function::).
#
# add_module_names = True

# If true, sectionauthor and moduleauthor directives will be shown in the
# output. They are ignored by default.
#
# show_authors = False

# The name of the Pygments (syntax highlighting) style to use.
pygments_style = 'sphinx'

# A list of ignored prefixes for module index sorting.
# modindex_common_prefix = []

# If true, keep warnings as "system message" paragraphs in the built documents.
# keep_warnings = False

# If true, `todo` and `todoList` produce output, else they produce nothing.
todo_include_todos = True


# -- Options for HTML output ----------------------------------------------

# The theme to use for HTML and HTML Help pages.  See the documentation for
# a list of builtin themes.
#
html_theme = 'sphinx_rtd_theme'

# Theme options are theme-specific and customize the look and feel of a theme
# further.  For a list of options available for each theme, see the
# documentation.
#
html_theme_options = {
    'sticky_navigation': True  # Set to False to disable the sticky nav while scrolling.
    # 'logo_only': True,  # if we have a html_logo below, this shows /only/ the logo with no title text
}

# Add any paths that contain custom themes here, relative to this directory.
# html_theme_path = []
html_theme_path = [sphinx_rtd_theme.get_html_theme_path()]

# The name for this set of Sphinx documents.
# "<project> v<release> documentation" by default.
#
# html_title = 'tools v'

# A shorter title for the navigation bar.  Default is the same as html_title.
#
# html_short_title = None

# The name of an image file (relative to this directory) to place at the top
# of the sidebar.
#
# html_logo = None

# The name of an image file (relative to this directory) to use as a favicon of
# the docs.  This file should be a Windows icon file (.ico) being 16x16 or 32x32
# pixels large.
#
# html_favicon = None

# Add any paths that contain custom static files (such as style sheets) here,
# relative to this directory. They are copied after the builtin static files,
# so a file named "default.css" will overwrite the builtin "default.css".
html_static_path = ['_static']

# Add any extra paths that contain custom files (such as robots.txt or
# .htaccess) here, relative to this directory. These files are copied
# directly to the root of the documentation.
#
# html_extra_path = []

# If not None, a 'Last updated on:' timestamp is inserted at every page
# bottom, using the given strftime format.
# The empty string is equivalent to '%b %d, %Y'.
#
# html_last_updated_fmt = None

# If true, SmartyPants will be used to convert quotes and dashes to
# typographically correct entities.
#
# html_use_smartypants = True

# Custom sidebar templates, maps document names to template names.
#
# html_sidebars = {}

# Additional templates that should be rendered to pages, maps page names to
# template names.
#
# html_additional_pages = {}

# If false, no module index is generated.
#
# html_domain_indices = True

# If false, no index is generated.
#
# html_use_index = True

# If true, the index is split into individual pages for each letter.
#
# html_split_index = False

# If true, links to the reST sources are added to the pages.
#
# html_show_sourcelink = True

# If true, "Created using Sphinx" is shown in the HTML footer. Default is True.
#
# html_show_sphinx = True

# If true, "(C) Copyright ..." is shown in the HTML footer. Default is True.
#
# html_show_copyright = True

# If true, an OpenSearch description file will be output, and all pages will
# contain a <link> tag referring to it.  The value of this option must be the
# base URL from which the finished HTML is served.
#
# html_use_opensearch = ''

# This is the file name suffix for HTML files (e.g. ".xhtml").
# html_file_suffix = None

# Language to be used for generating the HTML full-text search index.
# Sphinx supports the following languages:
#   'da', 'de', 'en', 'es', 'fi', 'fr', 'h', 'it', 'ja'
#   'nl', 'no', 'pt', 'ro', 'r', 'sv', 'tr', 'zh'
#
# html_search_language = 'en'

# A dictionary with options for the search language support, empty by default.
# 'ja' uses this config value.
# 'zh' user can custom change `jieba` dictionary path.
#
# html_search_options = {'type': 'default'}

# The name of a javascript file (relative to the configuration directory) that
# implements a search results scorer. If empty, the default will be used.
#
# html_search_scorer = 'scorer.js'

# Output file base name for HTML help builder.
htmlhelp_basename = 'toolsdoc'

# -- Options for LaTeX output ---------------------------------------------

latex_elements = {
     # The paper size ('letterpaper' or 'a4paper').
     #
     'papersize': 'a4paper',

     # The font size ('10pt', '11pt' or '12pt').
     #
     'pointsize': '12pt',

     # Additional stuff for the LaTeX preamble.
     #
     'preamble': '''

%% Verwendete Pakete:
\usepackage[ngerman]{babel}
\usepackage{caption}
\usepackage[T1]{fontenc}
\usepackage[utf8]{inputenc}
\usepackage{fancyhdr}
%\usepackage{lscape}
\usepackage{color}

\definecolor{mygray}{rgb}{0.9,0.9,0.9}
\definecolor{comments}{rgb}{0.12, 0.38, 0.18 }
\definecolor{keywords}{rgb}{0.37, 0.08, 0.25}
\definecolor{strings}{rgb}{0.06, 0.10, 0.98}
\definecolor{purple}{RGB}{128,0,128}
\usepackage{tikz}
\usepackage{listings}
\usepackage{float}
\usepackage[font={footnotesize,sf}]{caption}
\usepackage{courier}

\lstset
{
	numbers=left,
	numberstyle=\tiny,
	numbersep=5pt,
	rulesepcolor=\color{black},
	captionpos=b,
	frame=shadowbox,
	backgroundcolor=\color{mygray},
	showstringspaces=false,
	breaklines=true,
	tabsize=3,
	language=Java,
	basicstyle=\scriptsize\ttfamily,
	keywordstyle=\bfseries\color{keywords},
	%identifierstyle=\color{blue},
	stringstyle=\color{strings},
	commentstyle=\color{comments}\itshape
}

\onehalfspacing

\usepackage[left=2.5cm,right=2.5cm,top=1.5cm,bottom=1cm,
textheight=245mm,textwidth=160mm,includeheadfoot,headsep=1cm,
footskip=1cm,headheight=14.599pt]{geometry}

\usepackage{graphicx}

'''

     # Latex figure (float) alignment
     #
     # 'figure_align': 'htbp',
}

# Grouping the document tree into LaTeX files. List of tuples
# (source start file, target name, title,
#  author, documentclass [howto, manual, or own class]).
latex_documents = [
    (master_doc, 'ba.tex', 'BA',
     'Author', 'article'),
]

# The name of an image file (relative to this directory) to place at the top of
# the title page.
#
# latex_logo = None

# For "manual" documents, if this is true, then toplevel headings are parts,
# not chapters.
#
latex_use_parts = True

# If true, show page references after internal links.
#
# latex_show_pagerefs = False

# If true, show URL addresses after external links.
#
# latex_show_urls = False

# Documents to append as an appendix to all manuals.
#
# latex_appendices = []

# If false, no module index is generated.
#
# latex_domain_indices = True


# -- Options for manual page output ---------------------------------------

# One entry per manual page. List of tuples
# (source start file, name, description, authors, manual section).
man_pages = [
    (master_doc, 'tools', 'tools Documentation',
     [author], 1)
]

# If true, show URL addresses after external links.
#
# man_show_urls = False


# -- Options for Texinfo output -------------------------------------------

# Grouping the document tree into Texinfo files. List of tuples
# (source start file, target name, title, author,
#  dir menu entry, description, category)
texinfo_documents = [
    (master_doc, 'tools', 'tools Documentation',
     author, 'tools', 'One line description of project.',
     'Miscellaneous'),
]

# Documents to append as an appendix to all manuals.
#
# texinfo_appendices = []

# If false, no module index is generated.
#
# texinfo_domain_indices = True

# How to display URL addresses: 'footnote', 'no', or 'inline'.
#
# texinfo_show_urls = 'footnote'

# If true, do not generate a @detailmenu in the "Top" node's menu.
#
# texinfo_no_detailmenu = False


# -- Options for Epub output ----------------------------------------------

# Bibliographic Dublin Core info.
epub_title = project
epub_author = author
epub_publisher = author
epub_copyright = copyright

# The basename for the epub file. It defaults to the project name.
# epub_basename = project

# The HTML theme for the epub output. Since the default themes are not
# optimized for small screen space, using the same theme for HTML and epub
# output is usually not wise. This defaults to 'epub', a theme designed to save
# visual space.
#
# epub_theme = 'epub'

# The language of the text. It defaults to the language option
# or 'en' if the language is not set.
#
# epub_language = ''

# The scheme of the identifier. Typical schemes are ISBN or URL.
# epub_scheme = ''

# The unique identifier of the text. This can be a ISBN number
# or the project homepage.
#
# epub_identifier = ''

# A unique identification for the text.
#
# epub_uid = ''

# A tuple containing the cover image and cover page html template filenames.
#
# epub_cover = ()

# A sequence of (type, uri, title) tuples for the guide element of content.opf.
#
# epub_guide = ()

# HTML files that should be inserted before the pages created by sphinx.
# The format is a list of tuples containing the path and title.
#
# epub_pre_files = []

# HTML files that should be inserted after the pages created by sphinx.
# The format is a list of tuples containing the path and title.
#
# epub_post_files = []

# A list of files that should not be packed into the epub file.
epub_exclude_files = ['search.html']

# The depth of the table of contents in toc.ncx.
#
# epub_tocdepth = 3

# Allow duplicate toc entries.
#
# epub_tocdup = True

# Choose between 'default' and 'includehidden'.
#
# epub_tocscope = 'default'

# Fix unsupported image types using the Pillow.
#
# epub_fix_images = False

# Scale large images.
#
# epub_max_image_width = 0

# How to display URL addresses: 'footnote', 'no', or 'inline'.
#
# epub_show_urls = 'inline'

# If false, no index is generated.
#
# epub_use_index = True
