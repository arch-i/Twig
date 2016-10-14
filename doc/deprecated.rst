Deprecated Features
===================

This document lists deprecated features in Twig 2.x. Deprecated features are
kept for backward compatibility and removed in the next major release (a
feature that was deprecated in Twig 2.x is removed in Twig 3.0).

Interfaces
----------

* As of Twig 2.1, the empty ``Twig_ExistsLoaderInterface`` interface is
  deprecated and will be removed in Twig 3.0.

* As of Twig 2.1, the ``Twig_Extension_InitRuntimeInterface`` interface is
  deprecated and will be removed in Twig 3.0.

Parser
------

* As of Twig 2.1, the ``Twig_Parser::isReservedMacroName()`` function is
  deprecated and will be removed in Twig 3.0. It always returns ``false``
  anyway as Twig 2 does not have any reserved macro names.

Miscellaneous
-------------

* As of Twig 2.1, the ``Twig_SimpleFilter``, ``Twig_SimpleFunction``, and
  ``Twig_SimpleTest`` empty classes are deprecated and will be removed in Twig
  3.0. Use ``Twig_Filter``, ``Twig_Function``, and ``Twig_Test`` respectively.
