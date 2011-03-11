<?php
	/**
	 * 
	 * @author John Elliott
	 * 
	 * Base class to extend all models from - enables us to carry out generic actions automatically
	 * Acts as an alternative to extending models vai behaviours
	 *
	 */
	abstract class AbCActiveRecord extends CActiveRecord {
		
		
		/**
		 * populate the audit fields on a record save
		 */
		protected function beforeValidate(){
			
			
			if($this->isNewRecord){
				
				$this->date_created = $this->date_modified = new CDbExpression('NOW()');
				
				/**
				 * user is a property of CWebApplication 
				 * it does not as I thought refer to the Users model - but instead must refer to the internal Yii property of the current logged in user
				 */
				
				$this->created_by  = $this->modified_by = Yii::app()->user->id;
			
				
				
			} else { 
				// this is an updated record
				// date_updated is a timestamp so should be done automatically (at least for MySQL)
				
				
				$this->modified_by = Yii::app()->user->id;
				
				
			}
			
			return parent::beforeValidate();
			
			
			
		}
		
		
		
		
	}

	
	
?>