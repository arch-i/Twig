<?php

/*
 * This file is part of Twig.
 *
 * (c) 2012 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Used by Twig_Environment as a staging area.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
final class Twig_Extension_Staging extends Twig_Extension
{
    private $functions = array();
    private $filters = array();
    private $visitors = array();
    private $tokenParsers = array();
    private $tests = array();

    public function addFunction(Twig_Function $function)
    {
        if ($function instanceof Twig_SimpleFunction) {
            @trigger_error(sprintf('The "%s" function is defined using the Twig_SimpleFunction class which is deprecated since version 2.1 and will be removed in 3.0. Use Twig_Function instead.', $filter->getName()), E_USER_DEPRECATED);
        }

        if (isset($this->functions[$function->getName()])) {
            throw new LogicException(sprintf('Function "%s" is already registered.', $function->getName()));
        }

        $this->functions[$function->getName()] = $function;
    }

    public function getFunctions()
    {
        return $this->functions;
    }

    public function addFilter(Twig_Filter $filter)
    {
        if ($filter instanceof Twig_SimpleFilter) {
            @trigger_error(sprintf('The "%s" filter is defined using the Twig_SimpleFilter class which is deprecated since version 2.1 and will be removed in 3.0. Use Twig_Filter instead.', $filter->getName()), E_USER_DEPRECATED);
        }

        if (isset($this->filters[$filter->getName()])) {
            throw new LogicException(sprintf('Filter "%s" is already registered.', $filter->getName()));
        }

        $this->filters[$filter->getName()] = $filter;
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function addNodeVisitor(Twig_NodeVisitorInterface $visitor)
    {
        $this->visitors[] = $visitor;
    }

    public function getNodeVisitors()
    {
        return $this->visitors;
    }

    public function addTokenParser(Twig_TokenParserInterface $parser)
    {
        if (isset($this->tokenParsers[$parser->getTag()])) {
            throw new LogicException(sprintf('Tag "%s" is already registered.', $parser->getTag()));
        }

        $this->tokenParsers[$parser->getTag()] = $parser;
    }

    public function getTokenParsers()
    {
        return $this->tokenParsers;
    }

    public function addTest(Twig_Test $test)
    {
        if ($test instanceof Twig_SimpleTest) {
            @trigger_error(sprintf('The "%s" test is defined using the Twig_SimplerTest class which is deprecated since version 2.1 and will be removed in 3.0. Use Twig_Test instead.', $filter->getName()), E_USER_DEPRECATED);
        }

        if (isset($this->tests[$test->getName()])) {
            throw new LogicException(sprintf('Test "%s" is already registered.', $test->getTag()));
        }

        $this->tests[$test->getName()] = $test;
    }

    public function getTests()
    {
        return $this->tests;
    }
}
