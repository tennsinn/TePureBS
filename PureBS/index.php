<?php
/**
 * Typecho简洁皮肤Pure（Bootstrap版）
 * 
 * @package PureBS
 * @author 息E-敛
 * @version 1.0.2
 * @link http://tennsinn.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="col-xs-12 col-md-9" id="main" role="main">
	<?php $this->need('articles-card.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
