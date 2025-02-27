<?php namespace Config;

/*
	Author: Miloš Živkovic
    Github: zivkovicmilos
*/

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
		\App\Rules\CustomRules::class
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $alwaysFalse = [];
	
	public $p2Cinema = [
		'cinemaName' => 'required|min_length[5]',
		'address' => 'required|min_length[5]',
		'phoneNumber' => 'required|min_length[4]',
		'country' => 'required',
		'city' => 'required',
		'description' => 'permit_empty|min_length[10]|max_length[255]'
	];

	public $p2Cinema_errors = [
		'cinemaName' => [
			'required' => 'Cinema name is required',
			'min_length[5]' => 'Cinema name is too short',
		],
		'address' => [
			'required' => 'Address is required',
			'min_length[5]' => 'Address is too short',
		],
		'phoneNumber' => [
			'required' => 'Phone number is required',
			'min_length[4]' => 'Phone number is too short',
		],
		'country' => [
			'required' => 'Country is required',
		],
		'city' => [
			'required' => 'City is required',
		],
		'description' => [
			'min_length[10]' => 'Description must be at least 10 characters long',
			'max_length[255]' => 'Description is longer than 255 characters',
		],

	];

	public $p3Cinema = [
		'mngFirstName' => 'required|alpha',
		'mngLastName' => 'required|alpha',
		'mngEmail' => 'required|valid_email',
		'mngPhoneNumber' => 'required|numeric|min_length[4]'
	];

	public $p3Cinema_errors = [
		'mngFirstName' => [
			'required' => 'First name is required',
			'alpha' => 'Field must contain only letters'
		],

		'mngLastName' => [
			'required' => 'Last name is required',
			'alpha' => 'Field must contain only letters'
		],
		'mngEmail' => [
			'required' => 'Email is required',
			'valid_email' => 'Email must be valid',
		],
		'mngPhoneNumber' => [
			'required' => 'Phone number is required',
			'min_length[4]' => 'Phone number is too short',
			'numeric' => 'Must contain only numbers'
		]
	];

	public $p2User = [
		'firstName' => 'required|alpha',
		'lastName' => 'required|alpha',
		'email' => 'required|valid_email',
		'phone' => 'permit_empty|numeric|min_length[4]',
		'country.*' => 'required',
		'city.*' => 'required',
	];

	public $p2User_errors = [
		'firstName' => [
			'required' => 'First name is required',
			'alpha' => 'Field must contain only letters'
		],

		'lastName' => [
			'required' => 'Last name is required',
			'alpha' => 'Field must contain only letters'
		],
		'email' => [
			'required' => 'Email is required',
			'valid_email' => 'Email must be valid',
		],
		'phone' => [
			'min_length[4]' => 'Phone number is too short',
			'numeric' => 'Must contain only numbers'
		],
		'country.*' => [
			'required' => 'Country is required'
		],
		'city.*' => [
			'required' => 'City is required'
		]
	];

	public $passwordCheck = [
		'firstPassword' => 'required|min_length[6]',
		'secondPassword' => 'required|matches[firstPassword]'
	];

	public $passwordCheck_errors = [
		'firstPassword' => [
			'required' => 'Password is required',
			'min_length' => 'Password must be at least 6 characters long'
		],
		'secondPassword' => [
			'required' => 'Password is required',
			'matches' => 'Passwords must match'
		]
	];

	public $adminAccountCheck = [
		'fNameNA' => 'required|alpha|max_length[64]',
		'lNameNA' => 'required|alpha|max_length[64]',
		'emailNA' => 'required|valid_email|max_length[255]',
		'passwordNA' => 'required|min_length[6]',
		'passwordConfirmNA' => 'required|matches[passwordNA]'
	];

	public $adminAccountCheck_errors =[
		'fNameNA' => [
			'required' => 'First name is required',
			'alpha' => 'Field must contain only letters',
			'max_length' => 'First name should have less than 64 characters'
		],

		'lNameNA' => [
			'required' => 'Last name is required',
			'alpha' => 'Field must contain only letters',
			'max_length' => 'Last name should have less than 64 characters'
		],
		'emailNA' => [
			'required' => 'Email is required',
			'valid_email' => 'Email must be valid',
			'max_length' => 'Email should have less than 255 characters'
		],
		'passwordNA' => [
			'required' => 'Password is required',
			'min_length' => 'Password must be at least 6 characters long'
		],
		'passwordConfirmNA' => [
			'required' => 'Password is required',
			'matches' => 'Passwords must match'
		]
	];

	public $rUserAccountCheck = [
		'fName' => 'required|alpha|max_length[64]',
		'lName' => 'required|alpha|max_length[64]',
		'email' => 'required|valid_email|max_length[255]',
		'phone' =>	'permit_empty|decimal|max_length[64]',
		'pswd' => 'checkPassword',
		'profilePicture' => 'ext_in[profilePicture,png,jpg,jpeg]|max_size[profilePicture,200]|is_image[profilePicture]|mime_in[profilePicture,image/jpeg,image/jpg,image/png]'
	];

	public $rUserAccountCheck_errors =[
		'fName' => [
			'required' => 'First name is required',
			'alpha' => 'Field must contain only letters',
			'max_length' => 'First name should have less than 64 characters'
		],
		'lName' => [
			'required' => 'Last name is required',
			'alpha' => 'Field must contain only letters',
			'max_length' => 'Last name should have less than 64 characters'
		],
		'email' => [
			'required' => 'Email is required',
			'valid_email' => 'Email must be valid',
			'max_length' => 'Email should have less than 255 characters'
		],
		'phone' =>	[
			'max_length' => 'Phone number should have less than 64 numbers',
			'decimal' => 'Phone can only have numbers'
		],
		'profilePicture' => [
			'max_size' => 'Image too big',
			'mime in' => 'Ivalid format',
			'is_image' => 'File is not an image'
		]
	];

	public $placeCheck = [
		'place' => [
			'label' => 'Country and city',
			'rules' => 'checkPlace'
		]
	];

	public $cinemaInfoCheck = [
		'name' =>  'required|alpha_space|max_length[64]',
		'phone' =>	'required|decimal|max_length[64]',
		'address' => 'required|max_length[64]',
		'pswd' => 'checkPassword',
		'profilePicture' => 'ext_in[profilePicture,png,jpg,jpeg]|max_size[profilePicture,200]|is_image[profilePicture]|mime_in[profilePicture,image/jpeg,image/jpg,image/png]'
	];
	
	public $cinemaInfoCheck_errors =[
		'name' => [
			'required' => 'First name is required',
			'alpha' => 'Field must contain only letters',
			'max_length' => 'First name should have less than 64 characters'
		],
		'phone' =>	[
			'required' => 'Phone is required',
			'max_length' => 'Phone number should have less than 64 numbers',
			'decimal' => 'Phone can only have numbers'
		],
		'address' => [
			'required' => 'Address is required',
			'max_length' => 'Address should have less than 64 characters'
		],
		'profilePicture' => [
			'max_size' => 'Image too big',
			'mime in' => 'Ivalid format',
			'is_image' => 'File is not an image'
		]
	];

	public $adminSettingsCheck = [
		'fName' => 'required|alpha_space|max_length[64]',
		'lName' => 'required[name]|alpha_space|max_length[64]',
		'email' => 'required|valid_email|max_length[255]',
		'pswd' => 'checkPassword',
		'profilePicture' => 'ext_in[profilePicture,png,jpg,jpeg]|max_size[profilePicture,200]|is_image[profilePicture]|mime_in[profilePicture,image/jpeg,image/jpg,image/png]'
	];

	
	public $adminSettingsCheck_errors =[
		'fName' => [
			'required' => 'First name is required',
			'alpha_space' => 'Field must contain only letters and spaces',
			'max_length' => 'First name should have less than 64 characters'
		],
		'lName' => [
			'required' => 'Last name is required',
			'alpha_space' => 'Field must contain only letters and spaces',
			'max_length' => 'Last name should have less than 64 characters'
		],
		'email' => [
			'required' => 'Email is required',
			'valid_email' => 'Email must be valid',
			'max_length' => 'Email should have less than 64 characters'
		],
		'profilePicture' => [
			'max_size' => 'Image too big',
			'mime in' => 'Ivalid format',
			'is_image' => 'File is not an image'
		]
	];
			
	// Cinema controller validation.

	public $actionAddRoom = [
		'roomName' => [
			'label' => 'Name',
			'rules' => 'required|alpha_numeric_space|min_length[3]|max_length[64]|checkRoomName'
		],
		'tech' => [
			'label' => 'Technologies',
			'rules' => 'required|checkRoomTech'
		],
		'rows' => [
			'label' => 'Number of rows',
			'rules' => 'integer|greater_than[0]|less_than[27]'
		],
		'columns' => [
			'label' => 'Number of seats in each row',
			'rules' => 'integer|greater_than[0]|less_than[27]'
		]
	];
	
	public $actionEditRoom = [
		'oldRoomName' => [
			'label' => 'Old name',
			'rules' => 'required|alpha_numeric_space|min_length[3]|max_length[64]|checkOldRoomName'
		],
		'roomName' => [
			'label' => 'Name',
			'rules' => 'required|alpha_numeric_space|min_length[3]|max_length[64]|checkRoomNameExcept'
		],
		'tech' => [
			'label' => 'Technologies',
			'rules' => 'required|checkRoomTech'
		],
		'rows' => [
			'label' => 'Number of rows',
			'rules' => 'integer|greater_than[0]|less_than[27]'
		],
		'columns' => [
			'label' => 'Number of seats in each row',
			'rules' => 'integer|greater_than[0]|less_than[27]'
		]
	];

	public $actionRemoveRoom = [
		'oldRoomName' => [
			'label' => 'Old name',
			'rules' => 'required|alpha_numeric_space|min_length[3]|max_length[64]|checkOldRoomName'
		]
	];

	public $actionAddMovie = [
		'tmdbID' => [
			'label' => 'Movie ID',
			'rules' => 'required|integer|max_length[64]|is_not_unique[Movies.tmdbID]'
		],
		'room' => [
			'label' => 'Room',
			'rules' => 'required|alpha_numeric_space|min_length[3]|max_length[64]|checkOldRoomName'
		],
		'tech' => [
			'label' => 'Technology',
			'rules' => 'required|integer|checkMovieTech'
		],
		'startDate' => [
			'label' => 'Date of projection',
			'rules' => 'required|valid_date[Y-m-d]|checkIfDateInThePast'
		],
		'startTime' => [
			'label' => 'Start time',
			'rules' => 'required|exact_length[5]|validateTime|checkIfTimeInThePast|checkForCollisions'
		],
		'price' => [
			'label' => 'Price',
			'rules' => 'required|decimal'
		]
	];

	public $actionAddSoon = [
		'tmdbID' => [
			'label' => 'Movie ID',
			'rules' => 'required|integer|max_length[64]|is_not_unique[Movies.tmdbID]|checkIfReallySoon'
		]
	];

	public $actionEditMovie = [
		"oldIdPro" => [
			'label' => 'Projection ID',
			'rules' => 'required|integer|max_length[64]|is_not_unique[Projections.idPro]|checkIfProjectionOkToEdit'
		],
		'startDate' => [
			'label' => 'Date of projection',
			'rules' => 'required|valid_date[Y-m-d]|checkIfDateInThePast'
		],
		'startTime' => [
			'label' => 'Start time',
			'rules' => 'required|exact_length[5]|validateTime|checkIfTimeInThePast|checkForCollisions'
		]
	];

	public $actionCancelMovie = [
		"oldIdPro" => [
			'label' => 'Projection ID',
			'rules' => 'required|integer|max_length[64]|is_not_unique[Projections.idPro]|checkIfProjectionOkToEdit'
		]
	];

	public $actionCancelSoon = [
		"tmdbID" => [
			'label' => 'Movie ID',
			'rules' => 'required|integer|max_length[64]|is_not_unique[Movies.tmdbID]|checkIfNotSoon'
		]
	];

	public $actionReleaseSoon = [
		'soon' => [
			'label' => 'Add to Soon',
			'rules' => 'if_exist|shouldNotExist'
		],
		'tmdbID' => [
			'label' => 'Movie ID',
			'rules' => 'required|integer|max_length[64]|is_not_unique[Movies.tmdbID]|checkIfNotSoon'
		],
		'room' => [
			'label' => 'Room',
			'rules' => 'required|alpha_numeric_space|min_length[3]|max_length[64]|checkOldRoomName'
		],
		'tech' => [
			'label' => 'Technology',
			'rules' => 'required|integer|checkMovieTech'
		],
		'startDate' => [
			'label' => 'Date of projection',
			'rules' => 'required|valid_date[Y-m-d]|checkIfDateInThePast'
		],
		'startTime' => [
			'label' => 'Start time',
			'rules' => 'required|exact_length[5]|validateTime|checkIfTimeInThePast|checkForCollisions'
		],
		'price' => [
			'label' => 'Price',
			'rules' => 'required|decimal'
		]
	];

	public $actionRemoveEmployee = [
		'email' => [
			'label' => 'Worker E-mail',
			'rules' => 'required|valid_email|is_not_unique[Workers.email]|isYourWorker'
		]
	];

	public $actionAddEmployee = [
		'email' => [
			'label' => 'Worker E-mail',
			'rules' => 'required|valid_email|is_unique[Users.email]'
		],
		'firstName' => [
			'label' => 'First name',
			'rules' => 'required|alpha|max_length[50]'
		],
		'lastName' => [
			'label' => 'Last name',
			'rules' => 'required|alpha|max_length[50]'
		],
		'password' => [
			'label' => 'Password',
			'rules' => 'required|min_length[6]'
		],
		'confirm' => [
			'label' => 'Password confirmation',
			'rules' => 'required|matches[password]'
		]
	];

	// Theatre validation

	public $actionAddGalleryImage = [
		'imageName' => [
			'label' => 'New image name',
			'rules' => 'required|max_length[64]|uniqueGalleryImage'
		],
		'newImage' => [
			'label' => 'New image',
			'rules' => 'ext_in[newImage,png,jpg,jpeg]|max_size[newImage,600]|is_image[newImage]|mime_in[newImage,image/jpeg,image/jpg,image/png]'
		]
	];

	public $actionDeleteGalleryImage = [
		'deleteImageName' => [
			'label' => 'Selected image name',
			'rules' => 'required|max_length[64]|notUniqueGalleryImage'
		]
	];

	public $actionChangeBanner = [
		'newBanner' => [
			'label' => 'New image',
			'rules' => 'ext_in[newBanner,png,jpg,jpeg]|max_size[newBanner,600]|is_image[newBanner]|mime_in[newBanner,image/jpeg,image/jpg,image/png]'
		]
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
