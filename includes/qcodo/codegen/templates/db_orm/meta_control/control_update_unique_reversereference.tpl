                if ($this-><%= $strControlId %>) $this-><%= $strObjectName %>-><%= $objReverseReference->ObjectPropertyName %> = <%= $objReverseReference->VariableType %>::Load($this-><%= $strControlId %>->SelectedValue);