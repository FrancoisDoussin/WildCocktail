<?php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\Cocktail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Cocktail|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cocktail|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cocktail[]    findAll()
 * @method Cocktail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CocktailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cocktail::class);
    }

    public function findByCategoryOrderByAndSearch(Category $category, string $order, ?string $search): array
    {
        $query = $this->createQueryBuilder('c')
            ->where('c.category = :category')
            ->orderBy('c.name', $order)
            ->setParameter('category', $category)
        ;

        if ($search) {
            $query
                ->andWhere('c.name LIKE :search')
                ->setParameter('search', '%'.$search.'%')
            ;
        }

        return $query->getQuery()->getResult();
    }
}
