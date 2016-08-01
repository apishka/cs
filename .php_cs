<?php

$finder = Symfony\CS\Finder\DefaultFinder::create();

if (!isset($phpcs_folders))
{
    $phpcs_folders = array(
        'source',
        'tests',
    );
}

foreach ($phpcs_folders as $folder)
    $finder->in($folder);

$config = Symfony\CS\Config\Config::create();
$config->level(null);
$config->fixers(
    array(
        'encoding',
        'short_tag',
        'elseif',
        'eof_ending',
        'function_call_space',
        'function_declaration',
        'indentation',
        'line_after_namespace',
        'linefeed',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'multiple_use',
        'parenthesis',
        'php_closing_tag',
        'trailing_spaces',
        'visibility',
        'array_element_no_space_before_comma',
        'array_element_white_space_after_comma',
        'double_arrow_multiline_whitespaces',
        'duplicate_semicolon',
        'empty_return',
        'extra_empty_lines',
        'function_typehint_space',
        'join_function',
        'list_commas',
        'multiline_array_trailing_comma',
        'namespace_no_leading_whitespace',
        'no_blank_lines_after_class_opening',
        'object_operator',
        'operators_spaces',
        'phpdoc_indent',
        'phpdoc_no_access',
        'phpdoc_no_empty_return',
        'phpdoc_no_package',
        'phpdoc_params',
        'phpdoc_scalar',
        'phpdoc_separation',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_without_name',
        'pre_increment',
        'print_to_echo',
        'remove_leading_slash_use',
        'remove_lines_between_uses',
        'return',
        'self_accessor',
        'short_bool_cast',
        'single_array_no_trailing_comma',
        'single_quote',
        'spaces_cast',
        'standardize_not_equal',
        'ternary_spaces',
        'trim_array_spaces',
        'unary_operators_spaces',
        'unused_use',
        'whitespacy_lines',
        'align_double_arrow',
        'align_equals',
        'concat_with_spaces',
        'no_blank_lines_before_namespace',
        'ordered_use',
        'phpdoc_order',
    )
);
$config->finder($finder);

return $config;
