<?php

namespace digit\synergyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use digit\synergyBundle\Entity\embouteillage;
//use digit\synergyBundle\Form\embouteillage;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Helper\MapHelper;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Overlays\Marker;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Services\Geocoding\Geocoder;
use Ivory\GoogleMap\Services\Geocoding\GeocoderProvider;
use Geocoder\HttpAdapter\CurlHttpAdapter;
use Ivory\GoogleMap\Overlays\InfoWindow;
use Ivory\GoogleMap\Events\MouseEvent;
use Ivory\GoogleMap\Places\Autocomplete;
use Ivory\GoogleMap\Places\AutocompleteComponentRestriction;
use Ivory\GoogleMap\Places\AutocompleteType;
use digit\synergyBundle\Form\TrafficType;
use digit\synergyBundle\Entity\Trafficjam;
use Symfony\Component\Form\FormView;
class DefaultController extends Controller
{
    /**
     * @Route("/hello", name="hello")
     * @Template()
     */
    public function indexAction()
    {


      $geocoder = new Geocoder();
        $geocoder->registerProviders(array(
         new GeocoderProvider(new CurlHttpAdapter()),
            ));
        $response2 = $geocoder->geocode('Agadir,Morroco');
        
    $map2 = $this->get ( 'ivory_google_map.map' );

    $em = $this->getDoctrine()->getManager();
           $traffic = $em->getRepository('digitsynergyBundle:trafficjam')->findAll();
          

  // adding traffics to map2     
        foreach ($traffic as $result) {
        // Create a marker
        $marker = new Marker();
        // Position the marker
        $marker->setAnimation(Animation::BOUNCE);
        $marker->setAnimation('bounce');
        $marker->setPosition($result->getlargitude(),$result->getlongitude(),TRUE);

        // Add the marker to the map
        $map2->addMarker($marker);
                                             
//set the infowindow pour le marker
          $infoWindow = new InfoWindow();
          // Configure your info window options
                      $infoWindow->setPrefixJavascriptVariable('info_window_');
                      $infoWindow->setPosition(0, 0, true);
                      $infoWindow->setPixelOffset(1.1, 2.1, 'px', 'pt');
                      $infoWindow->setContent('<h3>'.$result->getTitle().'</h3><p>'.$result->getDescription().'</p>
                       <p>'.$result->getLargitude().",".$result->getLongitude().'</p>' );
                      $infoWindow->setOpen(false);
                      $infoWindow->setAutoOpen(true);
                      $infoWindow->setOpenEvent(MouseEvent::MOUSEOVER);
                      $infoWindow->setAutoClose(false);
                      $infoWindow->setOption('disableAutoPan', true);
                      $infoWindow->setOption('zIndex', 10);
                      $infoWindow->setOptions(array(
                          'disableAutoPan' => true,
                          'zIndex'         => 10,
                      ));

          $marker->setInfoWindow($infoWindow);}

          
           
  
  // custumise map2        
           $map2->setStylesheetOption('width', '70vw');
            $map2->setStylesheetOption('height', '30vw');
        // Sets the center
           $map2->setCenter(30.4251251, -9.5818193, true);

          
        // Sets the zoom
           $map2->setMapOption('zoom', 13);

           $map2->setMapOption('mapTypeId', MapTypeId::ROADMAP);
           $map2->setMapOption('mapTypeId', 'roadmap');
           
           
           $traffic = new Trafficjam();
$form = $this->createForm(new TrafficType(), $traffic);

 $request = $this->get('request');
  if ($request->getMethod() == 'POST') {
    $form->bind($request);
    if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($traffic);
      $em->flush();
      return $this->redirect($this->generateUrl('digit_synergy_default_index'));
    }
  }
$view = $form->createView();

       return $this->render('digitsynergyBundle:Default:index.html.twig',array(
               'map2' => $map2,
               'form' => $view
              // 'auto' => $autocomplete
           ));

       
    }

    /**
     * @Route("/haha")
     * @Template()
     */
    public function hahaAction()
    {
//FacebookSession::setDefaultApplication('YOUR_APP_ID','YOUR_APP_SECRET');

// Use one of the helper classes to get a FacebookSession object.
//   FacebookRedirectLoginHelper
//   FacebookCanvasLoginHelper
//   FacebookJavaScriptLoginHelper
// or create a FacebookSession with a valid access token:
/*$session = new FacebookSession('access-token-here');

// Get the GraphUser object for the current user:

try {
  $me = (new FacebookRequest(
    $session, 'GET', '/me'
  ))->execute()->getGraphObject(GraphUser::className());
  echo $me->getName();
} catch (FacebookRequestException $e) {
  // The Graph API returned an error
} catch (\Exception $e) {
  // Some other error occurred
}*/

        return array();
    }

   
   
}
