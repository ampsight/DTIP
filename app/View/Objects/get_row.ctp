<?php
  echo $this->element(
    'Objects/object_add_attributes',
    array(
      'element' => $element,
      'k' => $k,
      'appendValue' => '0'
    )
  );
?>
<script>
  enableDisableObjectRows([<?php echo h($k); ?>]);
</script>
