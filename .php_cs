<?php

if (!isset($finder))
{
    $finder = PhpCsFixer\Finder::create()
        ->in('source')
        ->in('tests')
    ;
}

$config = PhpCsFixer\Config::create()
    ->setUsingCache(false)
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ->setRules(
        array(
            //'binary_operator_spaces' => array(
            //    'align_equals' => false,
            //    'align_double_arrow' => true,
            //),
            'blank_line_after_namespace' => true,
            //'blank_line_after_opening_tag' => true,
            'blank_line_before_return' => true,
            'cast_spaces' => true,
            'class_definition' => array(
                'singleLine' => true,
                'singleItemSingleLine' => true,
                'multiLineExtendsEachSingleLine' => true
            ),
            //'class_keyword_remove' => true,
            //'combine_consecutive_unsets' => true,
            'concat_space' => array(
                'spacing' => 'one'
            ),
            'elseif' => true,
            'encoding' => true,
            'ereg_to_preg' => true,
            'full_opening_tag' => true,
            'function_declaration' => true,
            'function_typehint_space' => true,
            //'general_phpdoc_annotation_remove' => array(
            //    'expectedException',
            //    'expectedExceptionMessage',
            //    'expectedExceptionMessageRegExp'
            //),
            'hash_to_slash_comment' => true,
            'include' => true,
            'indentation_type' => true,
            'line_ending' => true,
            'lowercase_cast' => true,
            'lowercase_constants' => true,
            'lowercase_keywords' => true,
            //'method_argument_space' => true,
            //'method_separation' => true,
            'native_function_casing' => true,
            'new_with_braces' => true,
            'no_alias_functions' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            //'no_blank_lines_before_namespace' => true,
            'no_closing_tag' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            //'no_extra_consecutive_blank_lines' => array(
            //    'break',
            //    'continue',
            //    'extra',
            //    'return',
            //    'throw',
            //    'use',
            //    'useTrait',
            //    'curly_brace_block',
            //    'parenthesis_brace_block',
            //    'square_brace_block',
            //),
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => array(
                'use' => 'echo',
            ),
            'no_php4_constructor' => true,
            'no_short_bool_cast' => true,
            'no_short_echo_tag' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => array('inside', 'outside'),
            'no_spaces_inside_parenthesis' => true,
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unreachable_default_argument_value' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'object_operator_without_whitespace' => true,
            //'ordered_class_elements' => array(
            //    'use_trait',
            //    'constant_public',
            //    'constant_protected',
            //    'constant_private',
            //    'property_public',
            //    'property_protected',
            //    'property_private',
            //    'construct',
            //    'destruct',
            //    'magic',
            //    'phpunit',
            //),
            'ordered_imports' => true,
            'phpdoc_add_missing_param_annotation' => true,
            'phpdoc_align' => true,
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_indent' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => true,
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_package' => true,
            'phpdoc_order' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_trim' => true,
            'phpdoc_types' => true,
            'phpdoc_var_without_name' => true,
            'pow_to_exponentiation' => true,
            //'pre_increment' => true,
            'psr0' => true,
            'psr4' => true,
            'random_api_migration' => true,
            'return_type_declaration' => true,
            'self_accessor' => true,
            'semicolon_after_instruction' => true,
            'short_scalar_cast' => true,
            //'simplified_null_return' => true,
            'single_blank_line_before_namespace' => true,
            'single_class_element_per_statement' => true,
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_quote' => true,
            'space_after_semicolon' => true,
            'standardize_not_equals' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'trailing_comma_in_multiline_array' => true,
            'trim_array_spaces' => true,
            'visibility_required' => true,
            'whitespace_after_comma_in_array' => true,
        )
    )
;

return $config;
