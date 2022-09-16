<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php

if (isset($renderer) && isset($entry) && is_object($entry)) {

    $photo = $entry->getPersonPhoto();
    $profile = $entry->getPersonProfile();
    $phone = $entry->getPersonPhone();
    $email = $entry->getPersonEmail();
    $name = $entry->getPersonName();
    $surname = $entry->getPersonSurname();
    $job = $entry->getPersonJob();
    $address = $entry->getPersonAddress();

    $experiences = $entry->getExperiences();
    $educations = $entry->getEducations();
    $certificates = $entry->getCertificates();

    ?>

    <section class="left">
        <div class="circle"></div>
        <div class="photo">
            <img src="<?= $photo->getURL(); ?>" alt="cat" class="profile-photo"> 
        </div>
        <div class="content">
            <div class="content-part">
                <?= $profile; ?>
            </div>
            <div class="content-part contact">
                <h2 class="title"><?= t('Contact') ?></h2>
                <hr>
                <div class="text">
                    <ul>
                        <li>
                            <a href="tel: <?= $phone ?>"><i class="fa-solid fa-phone"></i><?= $phone ?></a>
                        </li>
                        <li>
                            <a href="mailto: <?= $email ?>"><i class="fa-solid fa-envelope"></i><?= $email ?></a>
                        </li>
                        <li>
                            <address><i class="fa-solid fa-location-dot"></i>
                                <span><?= $address; ?></span>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>                
        </div>
    </section>
    <section class="right">
        <div class="circle"></div>
        <div class="top">
            <div class="name">
                <span class="name"><?= $name; ?></span>
                <span class="surname"><?= $surname; ?></span>
            </div>
            <div class="job"><?= $job; ?></div>
        </div>
        <div class="bottom">
            <div class="content-part">
                <h2 class="title"><?= t('Work Experience') ?></h2>
                <hr>
                <div class="text"> <?php
                    if (isset($experiences)) {
                        foreach ($experiences as $experience) { ?>
                            <div class="exprerience">
                                <h4><?= $experience->getExperienceTimePeriod(); ?></h4>
                                <h3><?= $experience->getExperienceTitle(); ?></h3>
                                <h5><?= $experience->getExperienceFirm(); ?></h5>
                                <div class="details">
                                    <?= $experience->getExperienceResponsibilities(); ?>
                                </div>
                            </div> <?php
                        }
                    } ?>
                </div>
            </div>
            <div class="content-part">
                <h2 class="title"><?= t('Education') ?></h2>
                <hr>
                <div class="text"> <?php
                    if (isset($educations)) {
                        foreach ($educations as $education) { ?>
                            <div class="education">
                                <h4><?= $education->getEducationTimePeriod(); ?></h4>
                                <h3><?= $education->getEducationDepartment(); ?></h3>
                                <h5><?= $education->getEducationInstitute(); ?></h5>
                            </div> <?php
                        }
                    } ?>
                </div>
            </div>
            <div class="content-part">
                <h2 class="title"><?= t('Certificates') ?></h2>
                <hr>
                <div class="text">
                    <ul class="star"> <?php
                        if (isset($certificates)) {
                            foreach ($certificates as $certificate) { ?>
                                <li>
                                    <span><i class="fa-solid fa-certificate"></i></span>
                                    <span><?= $certificate->getCertificateCertificate(); ?></span>
                                </li> <?php
                            }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php } ?>