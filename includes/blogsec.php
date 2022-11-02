<?php
    $sql = "select * from blogs";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    // $array = mysql_fetch_array($result);
    if ($result->num_rows > 0) {
        // $row = $result->fetch_assoc();
        // echo "<pre>";
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // $data=json_encode($data);
        $rows_no = count($data);
        // print_r($rows_no);
            // echo "</pre>";
        
        // die();
    }
?>
        <!-- <div class="back5 w-100 h100 align-items-center d-flex">
             <div class="container h-100">
                <div class="row h-100 mx-auto align-items-center justify-content-center"> -->
                <?php // while($row = $result->fetch_assoc()) {
                  /*  <div class="col-md-4">
                        <div class="card m-2">
                            <a class="blog-img" href="blog/5" style="background-image:url('assets/blog/<?=$row['image']?>')"></a>
                            <div class="blog-details p-2">
                                <h3><?=$row['title']?></h3>
                                <p class="text-truncate">
                                <?=$row['content']?>
                                </p>
                            </div>
                        </div>
                    </div> */
                 // } }?>
                <!-- </div>
            </div>
        </div> -->
        
        <div class="w-100 h100 d-flex flex-column align-items-center justify-content-evenly py-4">
            <h2>Blogs</h2>
            <div class="container">
                <div id="carouselExampleIndicators2" class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item h-100 active">
                            <div class="row h-100 align-items-center justify-content-center">
                                <div class="col-md-4">
                                    <div class="card m-2">
                                        <a class="blog-img" href="blog/1" style="background-image:url('assets/blog/image1.jpg')">
                                            <div class="black-overlay"></div>
                                        </a>
                                        <div class="blog-details p-2">
                                            <h3>Blog 1</h3>
                                            <p class="text-truncate">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt distinctio repellat odio assumenda aut non vitae nisi harum explicabo natus, sed unde accusamus quae magnam tenetur eos ipsum blanditiis consequatur! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur temporibus rem vel cupiditate quidem cum tempore veritatis itaque, magnam repellendus voluptatem ea iure enim accusamus adipisci explicabo exercitationem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus eius blanditiis enim corporis cupiditate magni corrupti excepturi sunt optio. Voluptates fugiat perspiciatis, rerum error perferendis harum ipsa corrupti fugit molestiae.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card m-2">
                                        <a class="blog-img" href="blog/2" style="background-image:url('assets/blog/image2.jpg')">
                                            <div class="black-overlay"></div>
                                        </a>
                                        <div class="blog-details p-2">
                                            <h3>Blog 2</h3>
                                            <p class="text-truncate">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt distinctio repellat odio assumenda aut non vitae nisi harum explicabo natus, sed unde accusamus quae magnam tenetur eos ipsum blanditiis consequatur! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur temporibus rem vel cupiditate quidem cum tempore veritatis itaque, magnam repellendus voluptatem ea iure enim accusamus adipisci explicabo exercitationem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus eius blanditiis enim corporis cupiditate magni corrupti excepturi sunt optio. Voluptates fugiat perspiciatis, rerum error perferendis harum ipsa corrupti fugit molestiae.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card m-2">
                                        <a class="blog-img" href="blog/3" style="background-image:url('assets/blog/image3.jpg')">
                                            <div class="black-overlay"></div>
                                        </a>
                                        <div class="blog-details p-2">
                                            <h3>Blog 3</h3>
                                            <p class="text-truncate">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt distinctio repellat odio assumenda aut non vitae nisi harum explicabo natus, sed unde accusamus quae magnam tenetur eos ipsum blanditiis consequatur! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur temporibus rem vel cupiditate quidem cum tempore veritatis itaque, magnam repellendus voluptatem ea iure enim accusamus adipisci explicabo exercitationem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus eius blanditiis enim corporis cupiditate magni corrupti excepturi sunt optio. Voluptates fugiat perspiciatis, rerum error perferendis harum ipsa corrupti fugit molestiae.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="row h-100 align-items-center justify-content-center">
                                <div class="col-md-4">
                                    <div class="card m-2">
                                        <a class="blog-img" href="blog/4" style="background-image:url('assets/blog/image4.jpg')">
                                            <div class="black-overlay"></div>
                                        </a>
                                        <div class="blog-details p-2">
                                            <h3>Blog 4</h3>
                                            <p class="text-truncate">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt distinctio repellat odio assumenda aut non vitae nisi harum explicabo natus, sed unde accusamus quae magnam tenetur eos ipsum blanditiis consequatur! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur temporibus rem vel cupiditate quidem cum tempore veritatis itaque, magnam repellendus voluptatem ea iure enim accusamus adipisci explicabo exercitationem impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus eius blanditiis enim corporis cupiditate magni corrupti excepturi sunt optio. Voluptates fugiat perspiciatis, rerum error perferendis harum ipsa corrupti fugit molestiae.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="blogs" class="btn rounded-5 text-dark mt-4">
                View More
            </a>
        </div>