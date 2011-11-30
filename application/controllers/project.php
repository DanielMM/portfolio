<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{	//Select all projects
		$data['page_title'] = "Projects";
		$data['item']['project1']['title'] = "Project of all times";
		$data['item']['project1']['thumb'] = "img.png";
		$data['item']['project1']['thumb'] = "<img class=\"thumb\" src=".asset_url('img').$data['item']['project1']['thumb']." width=\"170\" height=\"170\" alt=\"{$data['item']['project1']['title']}\" title=\"{$data['item']['project1']['title']}\" />";
		$data['item']['project1']['date']['day'] = 2;
		$data['item']['project1']['date']['month'] = "oct";
		$data['item']['project1']['date']['year'] = 2010;
		$data['item']['project1']['url_title'] = url_title($data['item']['project1']['title'],"underscore");
		$data['item']['project1']['teaser'] = "est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magnailla eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia";

		$data['item']['project2']['title'] = "Javascript is a must";
		$data['item']['project2']['thumb'] = "img.png";
		$data['item']['project2']['thumb'] = "<img class=\"thumb\" src=".asset_url('img').$data['item']['project2']['thumb']." width=\"170\" height=\"170\" alt=\"{$data['item']['project2']['title']}\" title=\"{$data['item']['project2']['title']}\" />";
		$data['item']['project2']['date']['day'] = 22;
		$data['item']['project2']['date']['month'] = "mar";
		$data['item']['project2']['date']['year'] = 2011;
		$data['item']['project2']['url_title'] = url_title($data['item']['project2']['title'],"underscore");
		$data['item']['project2']['teaser'] = "ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia";

		$this->load->view('header_view', $data);
		$this->load->view('projects_list_view');
		$this->load->view('footer_view');
	}
	
	public function project_by_title($title)
	{
		//Select project by title
		$data['page_title'] = str_replace("_"," ",$title);

		$data['project']['date']['day'] = 10;
		$data['project']['date']['month'] = "sep";
		$data['project']['date']['year'] = 2010;

		$data['project']['meta']['id'] = 3;
		$data['project']['meta']['link'] = "http://www.example.com";
		$data['project']['meta']['category'] = "CMS";
		$data['project']['meta']['client'] = "Example Ltd. Co";
		$data['project']['meta']['tags'][] = "HTML5";
		$data['project']['meta']['tags'][] = "PHP";
		$data['project']['meta']['tags'][] = "MySQL";
		$data['project']['meta']['tags'][] = "jQuery";

		$data['project']['data']['teaser'] = "<p>est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magnailla eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.Ecclesiam consuetudinem viginti seu ad quia</p>";

		$data['project']['data']['body'] = "<p>Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. Admiratur filiam vel ita ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.</p>
				<p>	
					Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. Admiratur filiam vel ita ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.
					Me testatur in modo ad nomine Piscatore mihi servitute coniunx minus huius tuo est Apollonius. Manu duas particularis dedit beneficio uxor puella ut diem derelinquere patris Tyrius tu tu illum vero rex Dionysiadi rex! Arola iubet comprehenderent in deinde cupis hominem armatis exanimem scientiam pervenisset afferte Apollonius ut a civitas exulto haec. Remedium enim formam unitas reddere nominabat princeps ibi non ait mea Christianis aedificatur ergo est in. Scitote si non dum est se vero diam dominum vidit ad nomine, amet constanter determinatio debitis torporis quin virgo. Nescimus de ascendit neque capite diademate constituit mulier autem est cum autem est Apollonius non solutionem invenerunt.Lorem ipsum dolor sit amet, lugens quia quod non coepit. Adhibitis amor ea rege quem est amet coram me, quique non dum miror puella. Famulus sui Care genitorem ipsam consistit ait Cumque materia amicis in. Habere matrem Domini in modo. Diana praesentatis ne videret famis libet regio hinc ad quia iuvenis ut libertatem petitiones tulit. Admiratur filiam vel ita ideo illa eius est in. Amen ad suis alteri ad suis alteri formam. Ecclesiam consuetudinem viginti seu ad quia ei, permansit cum magna anima interim eam est Apollonius.
				</p>
				<p>
					Me testatur in modo ad nomine Piscatore mihi servitute coniunx minus huius tuo est Apollonius. Manu duas particularis dedit beneficio uxor puella ut diem derelinquere patris Tyrius tu tu illum vero rex Dionysiadi rex! Arola iubet comprehenderent in deinde cupis hominem armatis exanimem scientiam pervenisset afferte Apollonius ut a civitas exulto haec. Remedium enim formam unitas reddere nominabat princeps ibi non ait mea Christianis aedificatur ergo est in. Scitote si non dum est se vero diam dominum vidit ad nomine, amet constanter determinatio debitis torporis quin virgo. Nescimus de ascendit neque capite diademate constituit mulier autem est cum autem est Apollonius non solutionem invenerunt.
				</p>";

		$this->load->view('header_view', $data);
		$this->load->view('project_view', $data);
		$this->load->view('footer_view');
	}
	
	public function category($category)
	{
		//Select all projects beloging to one category
		$data['page_title'] = $category;
		$this->load->view('header_view', $data);
		$this->load->view('projects_list_view', $data);
		$this->load->view('footer_view');
	}
	
	public function tag($tag)
	{
		//Select all projects beloging to one category
		$data['title'] = $tag;
		$this->load->view('header_view', $data);
		$this->load->view('tag_view', $data);
		$this->load->view('footer_view');
	}
	
}

/* End of file project.php */
/* Location: ./application/controllers/project.php */