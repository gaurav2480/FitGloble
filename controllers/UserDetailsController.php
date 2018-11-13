<?php

namespace app\controllers;


use Yii;

use app\models\UserDetails;

use app\models\UserDetailsSearch;

use yii\web\Controller;

use yii\web\NotFoundHttpException;

use yii\filters\VerbFilter;


/**
 * UserDetailsController implements the CRUD actions for UserDetails model.
 */

class UserDetailsController extends Controller
{
  
  /**
     * @inheritdoc
     */
    
public function behaviors()
  
  {
        
return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => 
[
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    
/**
     * Lists all UserDetails models.
     * @return mixed
     */
   
 public function actionIndex()
    {
      
  $searchModel = new UserDetailsSearch();
     
   $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

   
     return $this->render('index', [
        
    'searchModel' => $searchModel,
          
  'dataProvider' => $dataProvider,
        ]);
   
 }

    /**
     * Displays a single UserDetails model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new UserDetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserDetails();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->User_ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserDetails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->User_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserDetails model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserDetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserDetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserDetails::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
