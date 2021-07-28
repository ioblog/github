<?php

/**
 * github项目展示
 * 
 * @package ioblog.cn
 * 
 **/

?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php $this->need('public/include.php'); ?>
    <link defer="defer"  rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ioblog/gather/github.css">
</head>

<body>
    <div id="Joe">
        <?php $this->need('public/header.php'); ?>
        <div class="joe_container">
            <div class="joe_main">
                <div class="joe_detail" data-cid="<?php echo $this->cid ?>">
                    <!--自定义内容-->
                    <section class="container j-index">
                        <h2 class="hh1">
                            <svg t="1626335427202" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1951" width="25" height="25"><path d="M682.215 981.446c-25.532 0-42.553-17.021-42.553-42.554v-165.96c4.255-34.043-8.511-59.575-29.788-80.852-12.766-12.766-17.022-29.788-8.51-42.554 4.254-17.022 21.276-25.532 34.042-29.788 123.406-12.766 238.302-55.32 238.302-255.323 0-46.81-17.022-93.618-51.065-131.917-12.766-12.766-12.766-29.788-8.51-42.554 12.766-34.043 12.766-68.086 4.255-102.129-21.277 4.255-55.32 17.022-110.64 55.32-8.511 8.51-21.277 8.51-34.043 4.255-89.363-25.532-187.237-25.532-276.6 0-12.767 4.256-25.533 4.256-38.299-4.255-51.065-38.298-89.363-51.065-110.64-55.32-8.51 34.043-8.51 68.086 4.255 102.13 4.256 17.02 4.256 34.042-8.51 42.553-34.043 38.299-51.065 85.108-51.065 131.917 0 200.003 114.895 242.557 238.302 255.323 17.021 0 29.787 12.766 34.043 29.788 4.255 17.022 0 34.043-8.511 42.554-21.277 21.277-29.788 46.81-29.788 76.597v165.96c0 25.532-17.021 42.554-42.554 42.554s-42.553-17.022-42.553-42.554v-72.342c-127.662 21.277-182.982-51.064-221.28-97.874-17.022-21.276-29.788-38.298-46.81-42.553-21.277-4.256-38.298-29.788-29.787-51.065 4.255-21.277 29.787-38.299 51.064-29.788 42.554 12.766 68.086 42.554 93.619 72.342 34.043 46.809 63.83 80.852 153.194 63.83v-4.255c0-25.532 4.255-55.32 12.766-76.597C235.4 670.803 107.738 594.206 107.738 368.671c0-63.831 21.277-123.407 59.576-170.216C150.292 138.88 154.548 83.56 180.08 28.24c4.255-12.767 12.766-21.277 25.532-25.533 17.022-4.255 72.342-12.766 187.237 59.576 93.619-21.277 191.493-21.277 280.856 0C784.345-10.06 843.92-1.548 860.942 2.707c12.766 4.256 21.277 12.766 25.532 25.533 21.277 55.32 25.532 110.64 12.766 165.96 38.299 46.809 59.576 106.384 59.576 170.215 0 242.557-144.684 306.388-246.813 331.92 8.51 25.533 12.766 55.32 12.766 80.853v161.704c0 25.533-17.021 42.554-42.554 42.554z" p-id="1952"></path></svg>
                            github项目展示</h2>
                        <div class="js" >
                            <span class="text">展示一些github的项目</span>
                        </div>
                        <section class="j-adaption">
                            <section class="main <?php $this->options->JListType() ?>">
                                <?php
                                $githubUser = "ioblog";
                                if ($githubUser == "" || $githubUser == null){
                                    $githubUser = 'ioblog';
                                }
                                ?>
                                
                                <section class="j-index-article article">
                                    <small class="text-muted letterspacing github_tips"></small>
                
                                    <div class="github_page">
                                        <div class="loading-nav text-center">
                                            <div class="spinner-border" role="status">
                                                <span class="sr-only"></span>
                                            </div>
                                        </div>
                                        <nav class="alert alert-warning hide text-center" role="alert">
                                            <p class="infinite-scroll-request">加载失败！尝试重新加载</p>
                                        </nav>
                                    </div>
                                </section>
                                <script type="text/javascript">
                                    const githubItemTemple = '<div class="col-xs-12 col-sm-6 col-md-4 githut_contain_l">' +
                                        '<div class="panel b-light {BG_COLOR}">\n' +
                                        '        <div class="panel-body"><div class="github_language">{PROJECT_LANGUAGE}</div>' +
                                        '          \n' +
                                        '          <div class="clear">\n' +
                                        '            <h2 class="text-ellipsis font-thin h3">{REPO_NAME}</h2>\n' +
                                        '            <small class="block m-sm"><i class="iconfont icon-star m-r-xs"></i>{REPO_STARS} stars / <i class="iconfont icon-fork"></i> {REPO_FORKS} forks</small>\n' +
                                        '<small class="text-ellipsis block text-muted">{REPO_DESC}</small>' +
                                        '<a target="_blank" href="{REPO_URL}" class="m-sm btn btn-rounded btn-sm lter btn-{BUTTON_COLOR}"><i class="glyphicon glyphicon-hand-up"></i>访问</a>' +
                                        '          </div>\n' +
                                        '        </div>\n' +
                                        '      </div>' +
                                        '</div>';
                                    function appendHtml(elem,value){
                                        let node = document.createElement("div"),
                                            fragment = document.createDocumentFragment(),
                                            childs = null,
                                            i = 0;
                                        node.innerHTML = value;
                                        childs = node.childNodes;
                                        for( ; i < childs.length; i++){
                                            fragment.appendChild(childs[i]);
                                        }
                                        elem.appendChild(fragment);
                                        childs = null;
                                        fragment = null;
                                        node = null;
                                    }
                
                                    const open = function () {
                                        const handleGithub = function () {
                                            var repoContainer = document.querySelector('.github_page')//$('.github_page');
                                            var loadingContainer = document.querySelector(".github_page .loading-nav");
                                            var errorContainer = document.querySelector(".github_page .error-nav");
                                            var countContainer = document.querySelector(".github_tips");
                                            var colors = ["light", "info", "dark", "success", "black", "warning", "primary", "danger"];
                                            let httpRequest = new XMLHttpRequest();
                                            httpRequest.open('GET',"https://api.github.com/users/<?php echo $githubUser; ?>/repos?accept=application/vnd.github.v3+json&sort=updated&direction=desc&per_page=100", true);
                                            httpRequest.send();
                                            httpRequest.onreadystatechange = function () {
                                                if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                                                    let json = JSON.parse(httpRequest.responseText);
                                                    if (json){
                                                        loadingContainer.classList.add("hide")
                                                        let ul = "<div class='raw'><div class='col-md-12'><div class=\"row row-sm text-center " +
                                                            "github_contain" +
                                                            "\"></div></div></div>";
                                                        appendHtml(repoContainer,ul)
                                                        let contentContainer = document.querySelector(".github_contain");
                                                        json.sort(function (a,b) {
                                                            return b.stargazers_count - a.stargazers_count
                                                        })
                                                        let show_len = json.length > 33?33:json.length
                                                        for(let i = 0;i<show_len;i++){
                                                            let repo = json[i]
                                                            repo.updated_at = repo.updated_at.substring(0, repo.updated_at.lastIndexOf("T"));
                                                            if (repo.language == null) {
                                                                repo.language = "未知";
                                                            }
                                                            //匹配替换
                                                            let item = githubItemTemple.replace("{REPO_NAME}", repo.name)
                                                                .replace("{REPO_URL}", repo.html_url)
                                                                .replace("{REPO_STARS}", repo.stargazers_count)
                                                                .replace("{REPO_FORKS}", repo.forks_count)
                                                                .replace("{REPO_DESC}", repo.description)
                                                                .replace("{BG_COLOR}", "bg-" + colors[i % 8])
                                                                .replace("{BUTTON_COLOR}", colors[(i) % 8])
                                                                .replace("{PROJECT_LANGUAGE}", repo.language);
                                                            appendHtml(contentContainer,item)
                                                        }
                                                    }else {
                                                        errorContainer.classList.remove("hide");
                                                    }
                                                }
                                            };
                                        };
                
                                        return {
                                            init: function () {
                                                handleGithub();
                                            }
                                        }
                                    };
                                    open().init();
                                </script>
                            </section>
                        </section>
                
                    </section>
                    
                    <!--自定义内容结束-->
                </div>
                <?php $this->need('public/comment.php'); ?>
            </div>
             <?php $this->need('public/aside.php'); ?>
        </div>
        <?php $this->need('public/footer.php'); ?>
    </div>
</body>

</html>
