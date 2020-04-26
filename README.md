# lance-iconic-one  
*WordPress theme iconic-one的修改版*
## 支持 WebP
- 默认情况下，WordPress不支持上传WebP格式的图片，在主题的`functions.php`里添加以下代码即可：  
```
function mimvp_file_is_displayable_image($result, $path) {
    $info = @getimagesize( $path );
    if($info['mime'] == 'image/webp') {
        $result = true;
    }
    return $result;
}
add_filter( 'file_is_displayable_image', 'mimvp_file_is_displayable_image', 10, 2 );
```
- 媒体列表显示webp缩略图，解决办法是在主题的`functions.php`里添加以下代码：  
```
function mimvp_file_is_displayable_image($result, $path) {
    $info = @getimagesize( $path );
    if($info['mime'] == 'image/webp') {
        $result = true;
    }
    return $result;
}
add_filter( 'file_is_displayable_image', 'mimvp_file_is_displayable_image', 10, 2 );
```
- webp静态图  
![静态图](https://blog.mimvp.com/wp-content/uploads/2019/12/wordpress-zhi-chi-webp-ge-shi-tu-pian-shang-chuan-fang-fa-01.webp)
- WebP 动态图  
![动态图](https://blog.mimvp.com/wp-content/uploads/2019/11/15-ge-linux-ming-ling-shen-qi-da-fu-ti-gao-gong-zuo-xiao-lv-05.webp)
