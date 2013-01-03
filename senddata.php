<?php
use Chregu\Latency\Entities\LatencyEntry;
use Chregu\Latency\Entities\SessionEntry;

include("./config.php");

$request_body = file_get_contents('php://input');

$data = json_decode($request_body, true);
$sess = new SessionEntry();
$sess->setIp($_SERVER['REMOTE_ADDR']);
$sess->setUserAgent($_SERVER['HTTP_USER_AGENT']);
if (isset($data['x_data'])) {
    $xdata = $data['x_data'];
    var_dump($xdata);
    if (isset($xdata['longitude'])) {
        $sess->setLongitude($xdata['longitude']);
        $sess->setLatitude($xdata['latitude']);
    }
    unset($data['x_data']);
}
$em->persist($sess);

foreach($data as $hash => $values) {

    $gp = new LatencyEntry();
    $gp->setSession($sess);
    $gp->setSource($values['x_location']);
    $gp->setX_iframeLoad($values['x_iframeLoad']);
    if (isset($values['responseEnd'])) {
        $gp->setResponseEnd($values['responseEnd']);
        $gp->setloadEventEnd($values['loadEventEnd']);
        $gp->setloadEventStart($values['loadEventStart']);
        $gp->setdomComplete($values['domComplete']);
        $gp->setdomContentLoadedEventEnd($values['domContentLoadedEventEnd']);
        $gp->setdomContentLoadedEventStart($values['domContentLoadedEventStart']);
        if (isset($values['domInteractive'])) {
            $gp->setdomInteractive($values['domInteractive']);
        }
        $gp->setdomLoading($values['domLoading']);
        $gp->setresponseStart($values['responseStart']);
        $gp->setrequestStart($values['requestStart']);
        $gp->setconnectEnd($values['connectEnd']);
        $gp->setconnectStart($values['connectStart']);
        $gp->setdomainLookupEnd($values['domainLookupEnd']);
        $gp->setdomainLookupStart($values['domainLookupStart']);
        $gp->setfetchStart($values['fetchStart']);
        $gp->setnavigationStart($values['navigationStart']);


    }
    if (isset($values['x_startScript'])) {
        $gp->setx_startScript($values['x_startScript']);
        $gp->setx_domContentLoadedEvent($values['x_domContentLoadedEvent']);
        $gp->setx_onLoad($values['x_onLoad']);
    }
    $em->persist($gp);
        $em->flush();

}
    $em->flush();


echo "ende";
