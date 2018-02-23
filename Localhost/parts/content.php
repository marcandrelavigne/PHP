<ul class="list">

   <?php

   function scan_dir($dir_lm) {
       $ignored = array('.', '..', '.svn', '.htaccess');

       $files = array();
       foreach (scandir($dir_lm) as $file) {
           if (in_array($file, $ignored)) continue;
           $files[$file] = filemtime($dir_lm . '/' . $file);
       }

       arsort($files);
       $files = array_keys($files);

       return ($files) ? $files : false;
   }

   $dir = scan_dir(getcwd());

   ?>

   <?php foreach ($dir as $file) : ?>

       <?php if( $file != "." && $file != ".." && $file != "index.php"  ) : ?>

        <li class="list-item">
            <a class="link" href="<?php echo $file; ?>"><?php echo $file; ?></a>
            <a class="link-btn" href="http://<?php echo $file; ?>" target="_blank"><em>v</em>Host</a>
            <a class="link-btn readmeLink" style="margin-right: 20px;" href="<?php echo $file; ?>/README.MD" target="_blank">README</a>
<!--             <a class="link-btn githubLink" style="margin-right: 20px;" href="https://github.com/marcandrelavigne/<?php echo $file; ?>" target="_blank">GitHub</a> -->
        </li>

       <?php endif; ?>

   <?php endforeach; ?>

</ul>