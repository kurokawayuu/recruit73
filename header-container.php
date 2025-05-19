<?php //ヘッダーエリア
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if (!defined('ABSPATH')) exit; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>こどもプラス - 放課後等デイサービス・児童発達支援の求人</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-top">
            <h1 class="site-title">放課後等デイサービス・児童発達支援の求人</h1>
        </div>
        <div class="header-container">
            <div class="logo">
                <a href="/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_kodomoplus.png" alt="こどもプラス">
                </a>
            </div>
            <nav>
                <ul class="main-nav">
                    <li><a href="/about">こどもプラスについて</a></li>
                    <li><a href="/column">お役立ちコラム</a></li>
                    <li><a href="/faq">よくある質問</a></li>
                    <li><a href="/company">会社概要</a></li>
                </ul>
            </nav>
            <div class="user-nav">
    <?php if (is_user_logged_in()) : 
        // ロールをチェック
        $user = wp_get_current_user();
        $is_agency = in_array('agency', (array) $user->roles);
        
        // リンク先を設定
        $favorites_link = $is_agency ? home_url('/job-list/') : home_url('/favorites/');
        $mypage_link = $is_agency ? home_url('/job-list/') : home_url('/members/');
    ?>
        <!-- ログイン済みの場合 -->
        <a href="<?php echo esc_url($favorites_link); ?>" class="login-btn">
            <i class="fas fa-heart"></i>お気に入り
        </a>
        <a href="<?php echo esc_url($mypage_link); ?>" class="register-btn">
            <i class="fas fa-user"></i>マイページ
        </a>
    <?php else : ?>
        <!-- 未ログインの場合 -->
        <a href="/login" class="login-btn">
            <i class="fas fa-user-circle"></i>ログイン
        </a>
        <a href="/register" class="register-btn">会員登録</a>
    <?php endif; ?>
</div>
        </div>
    </header>
   
</body>
</html>