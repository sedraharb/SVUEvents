<?php
// events.php 

$pageTitle = "الفعاليات";
include 'includes/header.php';

//   تضمين الاتصال بقاعدة البيانات
// include 'db.php';

//   جلب قيمة البحث والتصنيف من الرابط

//   بناء الاستعلام وتنفيذه حسب الفلاتر

// قراءة قيم البحث والتصنيف لإظهارها في الواجهة
$searchVal = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';
$categoryVal = isset($_GET['category']) ? htmlspecialchars($_GET['category']) : '';
?>

<!-- عنوان الصفحة -->
<section class="bg-primary text-white py-4">
    <div class="container">
        <h1 class="h3 mb-1">
            جميع الفعاليات
            <i class="bi bi-calendar2-week me-2"></i>
        </h1>
        <p class="mb-0 opacity-75">
            تصفح وابحث عن جميع الفعاليات القادمة في الجامعة.
        </p>
    </div>
</section>

<!-- قسم البحث والتصفية -->
<section class="py-4">
    <div class="container">

        <div class="search-bar">
            <form action="events.php" method="GET">
              <div class="row g-3 align-items-end text-end">
                    <div class="col-md-6">
                        <label for="searchInput" class="form-label fw-semibold">
                            البحث عن فعالية
                                 <i class="bi bi-search me-1"></i>
                        </label>

                        <input
                            type="text"
                            id="searchInput"
                            name="search"
                            class="form-control"
                            placeholder="ابحث باسم الفعالية..."
                            value="<?php echo $searchVal; ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="categoryFilter" class="form-label fw-semibold">
                            التصنيف
                              <i class="bi bi-tag me-1"></i>
                        </label>

                        <select id="categoryFilter" name="category" class="form-select">
                            <option value="">جميع التصنيفات</option>
                            <?php
                            /*
                             
                            جلب التصنيفات من قاعدة البيانات

                            while (..)) {
                            */
                            ?>
                            <option value="">
                                اسم التصنيف
                            </option>

                            <?php
                            /*
                            }
                            */
                            ?>

                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">
                            تصفية
                         <i class="bi bi-funnel me-1"></i>

                        </button>
                    </div>

                </div>
            </form>
        </div>

        <!--  عرض الفعاليات -->
        <div class="row g-4 mt-4" id="eventsGrid">

            <?php
            /*
            حلقة جلب الفعاليات من قاعدة البيانات
            while (;;) {
            */
            ?>

            <div class="col-sm-6 col-md-4">
                <div class="card event-card h-100">

                    <!--   صورة الفعالية -->
                    <!-- <img src="uploads/<?php // echo $event['image']; ?>" class="card-img-top" alt=""> -->

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
                        <p class="card-text  small flex-grow-1">
                            وصف مختصر للفعالية...
                        </p>
                        <a href="event.php?id=" class="btn btn-outline-primary btn-sm mt-3">
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

            <?php
            /*
            
            في حال عدم وجود نتائج

            if (الكود تبع الفعاليات) == 0) {
            */
            ?>

            <div class="col-12 text-center py-5">
                <i class="bi bi-calendar-x fs-1 "></i>
                <p class=" mt-3">
                    لا توجد فعاليات حالياً.
                </p>
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