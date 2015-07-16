<?php

final class HeraldEmptyFieldValue
  extends HeraldFieldValue {

  public function getFieldValueKey() {
    return 'none';
  }

  public function getControlType() {
    return self::CONTROL_NONE;
  }

  public function renderValue(PhabricatorUser $viewer, $value) {
    return null;
  }

}
