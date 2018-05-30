<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // homepage
        if ('/accueil' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/receipt')) {
            // receipt_index
            if ('/receipt' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ReceiptController::indexAction',  '_route' => 'receipt_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_receipt_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'receipt_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_receipt_index;
                }

                return $ret;
            }
            not_receipt_index:

            // receipt_new
            if ('/receipt/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ReceiptController::newAction',  '_route' => 'receipt_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_receipt_new;
                }

                return $ret;
            }
            not_receipt_new:

            // receipt_show
            if (preg_match('#^/receipt/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'receipt_show')), array (  '_controller' => 'AppBundle\\Controller\\ReceiptController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_receipt_show;
                }

                return $ret;
            }
            not_receipt_show:

            // receipt_edit
            if (preg_match('#^/receipt/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'receipt_edit')), array (  '_controller' => 'AppBundle\\Controller\\ReceiptController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_receipt_edit;
                }

                return $ret;
            }
            not_receipt_edit:

            // receipt_delete
            if (preg_match('#^/receipt/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'receipt_delete')), array (  '_controller' => 'AppBundle\\Controller\\ReceiptController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_receipt_delete;
                }

                return $ret;
            }
            not_receipt_delete:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
