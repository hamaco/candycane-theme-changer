<p>
  <label>Theme</label>
  <?php
    echo $this->Form->select(
      'UserPreference.pref.ui_theme',
      ClassRegistry::getObject('ThemeContainer')->getThemeLists(),
      array(
        'empty' => 	__('Default')
      )
    );
  ?>
</p>
