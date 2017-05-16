// src/tfg/OfertaBundle/Entitiy/OfertaRepository.php

namespace tfg\OfertaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class OfertaRepository extends EntityRepository
{
   public function findOfertaDelDia($comentario)
   {
     $fechaPublicacion = new \DateTime('today');
     $fechaPublicacion->setTime(23, 59, 59);
     $em = $this->getEntityManager();
     $dql = 'SELECT
     FROM
     JOIN
     WHERE
     AND
     AND
     ORDER BY
     o, c, t
     OfertaBundle:Oferta o
     o.comentario c JOIN o.tienda t
     o.revisada = true
     o.fecha_publicacion < :fecha
     c.slug = :comentario
     o.fecha_publicacion DESC';
     $consulta = $em->createQuery($dql);
     $consulta->setParameter('fecha', $fechaPublicacion);
     $consulta->setParameter('comentario', $comentario);
     $consulta->setMaxResults(1);
     return $consulta->getSingleResult();
   }
}
