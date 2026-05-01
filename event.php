<?php

$pageTitle = "تفاصيل الفعالية";
include 'includes/header.php';

//     الاتصال بقاعدة البيانات
// include 'db.php';

//  
//   جلب رقم الفعالية من الرابط يعني ال id تبع الفعالية
/*

//    جلب بيانات الفعالية من قاعدة البيانات

//    جلب الفعاليات المشابهة من قاعدة البيانات

*/

?>

<div class="bg-light py-2 border-bottom">
    <div class="container" dir = "rtl">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">

                <li class="breadcrumb-item">
                    <a href="index.php">الرئيسية</a>
                </li>
                <li class="breadcrumb-item">
                     
                </li>

                <li class="breadcrumb-item">
                    <a href="events.php">الفعاليات</a>
                </li>

                <li class="active">
                    عنوان الفعالية
                </li>

            </ol>
        </nav>

    </div>
</div>

<!-- تفاصيل الفعالية -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <!-- المحتوى الرئيسي -->
            <div class="col-lg-8">

                <!-- صورة الفعالية -->
                <?php
                /*
                  
                عرض صورة الفعالية من قاعدة البيانات
                if ($event['image']) {
                */
                ?>

                <!-- <img src="uploads/<?php // echo $event['image']; ?>" class="event-detail-img mb-4"> -->

                <?php
                /*
                } else {
                */
                ?>

                <div class="event-detail-img d-flex align-items-center justify-content-center bg-light mb-4"
                     style="height:300px; border-radius:12px;">

                    <div class="text-center ">
                        <i class="bi bi-image" style="font-size:3.5rem;"></i>
                        <p class="mt-2 small">
                            ستظهر صورة الفعالية هنا
                        </p>
                    </div>

                </div>

                <?php
                /*
                }
                */
                ?>

                <!-- العنوان والتصنيف -->
                <div class="mb-3 text-end">

                    <span class="badge bg-primary mb-2 align-self-end">
                        اسم التصنيف
                        <!--  بدل جملة اسم التصنيف (احذفها بعد ماتكتب الاستعلام) منعرض اسم التصنيف الحقيقي من الداتا بيز  -->
                    </span>

                    <h1 class="h2 fw-bold">
                        عنوان الفعالية
                        <!-- نفس فكرة اسم التصنيف -->
                    </h1>

                </div>

                <!-- وصف الفعالية -->
                <div class="card border-0 shadow-sm p-4 mb-4 text-end">

                    <h5 class="fw-semibold mb-3">
                        حول هذه الفعالية
                    </h5>

                    <p class=" lh-lg">
                        وصف الفعالية الكامل سيظهر هنا...
                    </p>

                </div>

                <!-- الأزرار -->
                <div class="d-flex flex-wrap gap-2 justify-content-end">
                    <button class="btn btn-success" onclick="addToCalendar()">
                        إضافة إلى التقويم
                        <i class="bi bi-calendar-plus ms-2"></i>
                    </button>

                    <button class="btn btn-outline-primary" onclick="shareEvent()">
                        مشاركة
                        <i class="bi bi-share ms-2"></i>
                    </button>

                    <a href="events.php" class="btn btn-outline-secondary">
                        العودة للفعاليات
                        <i class="bi bi-arrow-left ms-2"></i>
                    </a>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow-sm p-4 mb-4 text-end">

                    <h5 class="fw-semibold mb-3">
                        معلومات الفعالية
                    </h5>

                    <div class="event-meta-item d-flex align-items-start gap-3 mb-3">

                        <i class="bi bi-calendar-event"></i>

                        <div>
                            <small class=" d-block">
                                التاريخ
                            </small>

                            <strong>
                                تاريخ الفعالية
                            </strong>
                        </div>

                    </div>

                    <div class="event-meta-item d-flex align-items-start gap-3 mb-3">

                        <i class="bi bi-geo-alt"></i>

                        <div>
                            <small class=" d-block">
                                المكان
                            </small>

                            <strong>
                                مكان الفعالية
                            </strong>
                        </div>

                    </div>

                    <div class="event-meta-item d-flex align-items-start gap-3 mb-3">

                        <i class="bi bi-tag"></i>

                        <div>
                            <small class=" d-block">
                                التصنيف
                            </small>

                            <strong>
                                اسم التصنيف
                            </strong>
                        </div>

                    </div>

                    <div class="event-meta-item d-flex align-items-start gap-3">

                        <i class="bi bi-hash"></i>

                        <div>
                            <small class=" d-block">
                                رقم الفعالية
                            </small>

                            <strong>
                                #رقم
                            </strong>
                        </div>

                    </div>

                </div>

                <!-- الموقع -->
                <div class="card border-0 shadow-sm p-4 text-end">

                    <h6 class="fw-semibold mb-2">
                        خريطة الموقع
                        <i class="bi bi-map ms-2 text-primary"></i>
                    </h6>

                    <div class="bg-light rounded d-flex align-items-center justify-content-center"
                         style="height:140px;">

                        <p class=" small mb-0">
                            سيتم عرض الخريطة هنا
                            <i class="bi bi-geo-alt ms-1"></i>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- الفعاليات المشابهة -->
<section class="py-4 bg-light">
    <div class="container">

        <h2 class="section-title text-end">
            الفعاليات المشابهة
            <i class="bi bi-grid ms-2"></i>
        </h2>

        <div class="row g-4">

            <?php
            /*
              
            حلقة عرض الفعاليات المشابهة

            while (\\ كذا كذا)) {
            */
            ?>

            <div class="col-sm-6 col-md-4">

                <div class="card event-card h-100">

                    <div class="card-body text-end">

                        <span class="badge bg-secondary mb-2 align-self-end">
                            اسم التصنيف
                        </span>

                        <h6 class="card-title fw-semibold">
                            عنوان الفعالية
                        </h6>

                        <p class=" small mb-1">
                            مكان الفعالية
                            <i class="bi bi-geo-alt ms-1"></i>
                        </p>

                        <p class=" small mb-3">
                            تاريخ الفعالية
                            <i class="bi bi-calendar ms-1"></i>
                        </p>

                        <a href="event.php?id=" class="btn btn-outline-primary btn-sm">
                            عرض التفاصيل
                            <i class="bi bi-arrow-left ms-1"></i>
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

<script>
function addToCalendar() {
    alert('سيتم إضافة وظيفة التقويم من الباك اند لاحقاً');
}

function shareEvent() {
    if (navigator.share) {
        navigator.share({
            title: "تفاصيل الفعالية",
            url: window.location.href
        });
    } else {
        navigator.clipboard.writeText(window.location.href).then(function() {
            alert('تم نسخ رابط الفعالية');
        });
    }
}
</script>

<?php include 'includes/footer.php'; ?>