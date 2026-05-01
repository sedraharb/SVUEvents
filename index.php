<?php
$pageTitle = "الرئيسية";
include 'includes/header.php';

// تضمين الاتصال بقاعدة البيانات

//  جلب الفعاليات المميزة من قاعدة البيانات
/*
 جلب أحدث الفعاليات من قاعدة البيانات

جلب التصنيفات من قاعدة البيانات
*/

?>

<section class="hero-section text-center">
    <div class="container">
        <h1 class="mb-3">
            دليل فعاليات الجامعة الافتراضية السورية
            <i class="bi bi-calendar-event me-2"></i>
        </h1>

        <p class="mb-4">
            اكتشف الفعاليات الأكاديمية، والأنشطة الرياضية، والحفلات الموسيقية والمزيد...
            كلها في مكان واحد.
        </p>

        <a href="events.php" class="btn btn-light btn-lg fw-bold px-5">
            عرض جميع الفعاليات
            <i class="bi bi-search me-2"></i>
        </a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="section-title">
            الفعاليات المميزة
            <i class="bi bi-star me-2"></i>

        </h2>
        <div class="row g-4">
            <?php
            /*
           
            عرض الفعاليات المميزة من قاعدة البيانات

            while (....) {
            */
            ?>
            <!--  بطاقة فعالية -->
            <div class="col-md-4">
                <div class="card event-card h-100">

                    <!--  صورة الفعالية من قاعدة البيانات -->
                    <!-- <img src="uploads/<?php // echo $event['image']; ?>" alt=""> -->

                    <div class="card-body d-flex flex-column">

                        <span class="badge bg-primary mb-2 align-self-start">
                            اسم التصنيف
                        </span>
                        <h5 class="card-title">
                            عنوان الفعالية
                        </h5>
                        <p class=" small mb-1">
                            مكان الفعالية
                            <i class="bi bi-geo-alt me-1"></i>
                        </p>
                        <p class=" small mb-2">
                            تاريخ الفعالية
                           <i class="bi bi-calendar me-1"></i>
                        </p>
                        <p class="card-text  small flex-grow-1">
                            وصف مختصر للفعالية...
                        </p>
                        <a href="event.php?id=" class="btn btn-primary mt-3">
                            عرض التفاصيل
                        </a>

                    </div>
                </div>
            </div>

            <?php
            /*
            }
            */
            ?>

        </div>
    </div>
</section>

<section class="py-4 bg-light">
    <div class="container">

        <h2 class="section-title">
            تصفح حسب التصنيف
            <i class="bi bi-grid me-2"></i>

        </h2>

        <div class="row g-3">

            <?php
            /*
            حلقة عرض التصنيفات من قاعدة البيانات

            while (..) {
            */
            ?>
            <div class="col-6 col-sm-4 col-md-3">
                <a href="events.php?category=" class="category-card">
                    <i class="bi bi-grid text-primary"></i>
                    <span>اسم التصنيف</span>
                </a>
            </div>
            <?php
            /*
            }
            */
            ?>
        </div>
    </div>
</section>

<!-- أحدث الفعاليات -->
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title mb-0">
                أحدث الفعاليات
                <i class="bi bi-clock me-2"></i>
            </h2>
            <a href="events.php" class="btn btn-outline-primary btn-sm">
                عرض الكل
            </a>
        </div>
        <div class="row g-4">

            <?php
            /*
            حلقة عرض أحدث الفعاليات من قاعدة البيانات
            while (هون الكود) {
            */
            ?>
            <!-- قالب بطاقة فعالية -->
            <div class="col-sm-6 col-md-4">
                <div class="card event-card h-100">

                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-primary mb-2 align-self-start">
                            اسم التصنيف
                        </span>
                        <h6 class="card-title fw-semibold">
                            عنوان الفعالية
                        </h6>
                       <p class=" small mb-1">
                            مكان الفعالية
                            <i class="bi bi-geo-alt me-1"></i>
                        </p>
                        <p class=" small mb-2">
                            تاريخ الفعالية
                           <i class="bi bi-calendar me-1"></i>
                        </p>
                        <a href="event.php?id=" class="btn btn-outline-primary btn-sm mt-auto">
                            التفاصيل
                        </a>
                    </div>
                </div>
            </div>

            <?php
            /*
            }
            */
            ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>