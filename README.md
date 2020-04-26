# lance-iconic-one theme
## iconic-one的修改版
### 支持 WebP
- 默认情况下，WordPress不支持上传WebP格式的图片，在主题的functions.php里添加以下代码即可：  
#```
function mimvp_file_is_displayable_image($result, $path) {  
    $info = @getimagesize( $path );  
    if($info['mime'] == 'image/webp') {  
        $result = true;  
    }  
    return $result;  
}  
add_filter( 'file_is_displayable_image', 'mimvp_file_is_displayable_image', 10, 2 );
#```
