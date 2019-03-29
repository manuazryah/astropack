<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 1])->one();
        $about = \common\models\About::find()->where(['id' => 1])->one();
        $sliders = \common\models\Slider::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        $testimonials = \common\models\Testimonials::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC])->all();
        $services = \common\models\Services::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->one();
        $clients = \common\models\Clients::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        $products = \common\models\Products::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->limit(6)->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('index', [
                    'sliders' => $sliders,
                    'testimonials' => $testimonials,
                    'services' => $services,
                    'products' => $products,
                    'clients' => $clients,
                    'meta_tags' => $meta_tags,
                    'about' => $about,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 2])->one();
        $about = \common\models\About::findOne(1);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('about', [
                    'about' => $about,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
        ]);
    }

    /**
     * Displays brand page.
     *
     * @return mixed
     */
    public function actionBrand() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 5])->one();
        $brands = \common\models\Brands::find()->where(['status' => 1])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('brand', [
                    'brands' => $brands,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
        ]);
    }

    /**
     * Displays products page.
     *
     * @return mixed
     */
    public function actionProducts($brand = NULL) {
        if (isset($brand) && $brand != '') {
            $brand_info = \common\models\Brands::find()->where(['brand_name' => $brand])->one();
            $products = \common\models\Products::find()->where(['status' => 1, 'brand' => $brand_info->id])->all();
        } else {
            $products = \common\models\Products::find()->where(['status' => 1])->all();
        }
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 3])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('products', [
                    'products' => $products,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'brand' => $brand,
        ]);
    }

    /**
     * Displays products page.
     *
     * @return mixed
     */
    public function actionProductDetails($product = NULL) {
        $enquiry = 0;
        if (isset($product) && $product != '') {
            $product_details = \common\models\Products::find()->where(['status' => 1, 'canonical_name' => $product])->one();
            $meta_title = $product_details->meta_title;
        } else {
            $product_details = [];
            $meta_title = '';
        }
        $baner_image = \common\models\BanerImages::findOne(1);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $product_details->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $product_details->meta_description]);
        return $this->render('pro_detail', [
                    'product_details' => $product_details,
                    'meta_title' => $meta_title,
                    'baner_image' => $baner_image,
                    'enquiry' => $enquiry,
        ]);
    }

    /**
     * Displays products page.
     *
     * @return mixed
     */
    public function actionProductEnquiry($product = NULL) {
        $enquiry = 1;
        if (isset($product) && $product != '') {
            $product_details = \common\models\Products::find()->where(['status' => 1, 'canonical_name' => $product])->one();
            $meta_title = $product_details->meta_title;
        } else {
            $product_details = [];
            $meta_title = '';
        }
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 3])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('pro_detail', [
                    'product_details' => $product_details,
                    'meta_title' => $meta_title,
                    'baner_image' => $baner_image,
                    'enquiry' => $enquiry,
        ]);
    }

    /**
     * Displays services page.
     *
     * @return mixed
     */
    public function actionServices() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 4])->one();
        $services = \common\models\Services::find()->where(['status' => 1])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('services', [
                    'services' => $services,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
        ]);
    }

    /**
     * Displays news and events page.
     *
     * @return mixed
     */
    public function actionNewsAndEvents() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 6])->one();
        $events = \common\models\NewsEvents::find()->where(['status' => 1])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('news', [
                    'events' => $events,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
        ]);
    }

    /**
     * Displays event details page.
     *
     * @return mixed
     */
    public function actionEventDetails($event) {
        $baner_image = \common\models\BanerImages::findOne(1);
        $event_details = \common\models\NewsEvents::find()->where(['canonical_name' => $event])->one();
        $events = \common\models\NewsEvents::find()->where(['status' => 1])->andWhere(['!=', 'id', $event_details->id])->limit(10)->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $event_details->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $event_details->meta_description]);
        return $this->render('news_detail', [
                    'event_details' => $event_details,
                    'baner_image' => $baner_image,
                    'events' => $events,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $contact_info = \common\models\ContactsInfo::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 7])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('contact', [
                    'meta_tags' => $meta_tags,
                    'contact_info' => $contact_info,
                    'baner_image' => $baner_image,
        ]);
    }

    /*
     * Contact Enquiry submission through jquery
     */

    public function actionContactEnquiry() {
        if (Yii::$app->request->isAjax) {
            $model = new \common\models\ContactEnquiry();
            $model->name = $_POST['name'];
            $model->email = $_POST['email'];
            $model->phone = $_POST['phone'];
            $model->company = $_POST['company'];
            $model->message = $_POST['message'];
            $model->date = date('Y-m-d');
            if ($model->save()) {
//                $this->sendContactMail($model);
                echo 1;
                exit;
            } else {
                echo 0;
                exit;
            }
        }
    }

    /*
     * Contact Enguery mail function
     */

    public function sendContactMail($model) {
        $message = Yii::$app->mailer->compose('enquiry-mail', ['model' => $model]) // a view rendering result becomes the message body here
                ->setFrom('info@craftershub.ae')
                ->setTo('manu@azryah.com')
                ->setSubject('Enquiry From Astropack');

        $message->send();
        return TRUE;
    }

    /*
     * News Letter Subscription
     */

    public function actionNewsLetter() {
        if (Yii::$app->request->isAjax) {
            $exist = \common\models\NewsLetter::find()->where(['email' => $_POST['email']])->one();
            if (empty($exist)) {
                $model = new \common\models\NewsLetter();
                $model->email = $_POST['email'];
                $model->date = date('Y-m-d');
                if ($model->save()) {
//                    $this->sendNewsLetterMail($model);
                    echo 1;
                    exit;
                } else {
                    echo 0;
                    exit;
                }
            } else {
                echo 2;
                exit;
            }
        }
    }

    public function sendNewsLetterMail($model) {
        $message = Yii::$app->mailer->compose('news-letter-mail', ['model' => $model]) // a view rendering result becomes the message body here
                ->setFrom('no-reply@craftershub.ae')
                ->setTo('manu@azryah.com')
                ->setSubject('Newsletter Subscription From Astropack');

        $message->send();
        return TRUE;
    }

    /*
     * Contact Enquiry submission through jquery
     */

    public function actionProductsEnquiry() {
        if (Yii::$app->request->isAjax) {
            $model = new \common\models\ProductEnquiry();
            $model->name = $_POST['name'];
            $model->email = $_POST['email'];
            $model->phone = $_POST['phone'];
            $model->product = $_POST['product'];
            $model->message = $_POST['message'];
            $model->date = date('Y-m-d');
            if ($model->save()) {
//                $this->sendProductMail($model);
                echo 1;
                exit;
            } else {
                echo 0;
                exit;
            }
        }
    }

    /*
     * Contact Enguery mail function
     */

    public function sendProductMail($model) {
        $message = Yii::$app->mailer->compose('product-mail', ['model' => $model]) // a view rendering result becomes the message body here
                ->setFrom('info@craftershub.ae')
                ->setTo('manu@azryah.com')
                ->setSubject('Enquiry From Astropack');

        $message->send();
        return TRUE;
    }

}
